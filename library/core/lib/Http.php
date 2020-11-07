<?php

declare(strict_types = 1);

namespace aliyun\sdk\core\lib;

use axios\tools\ArrayMap;
use axios\tools\XMLParser;
use Mimey\MimeTypes;
use function json_decode;

class Http
{
    private $options;

    private $method = 'GET';

    public function __construct($options = [])
    {
        $this->options = $options;
    }

    public function config(array $config = [])
    {
        if (!empty($config)) {
            $this->options = array_merge($this->options, $config);
        }

        return $this->options;
    }

    public function setParam($params)
    {
        if (!isset($this->options['form_params'])) {
            $this->options['form_params'] = [];
        }
        $this->options['form_params'] = $params;

        return $this;
    }

    public function setHeaders($headers)
    {
        if (!isset($this->options['headers'])) {
            $this->options['headers'] = [];
        }
        $this->options['headers'] = array_merge($this->options['headers'], $headers);
        return $this;
    }

    public function setBody($body)
    {
        $this->options['body'] = $body;

        return $this;
    }

    public function setDomain($domain)
    {
        if (0 !== strpos($domain, 'http://') && 0 !== strpos($domain, 'https://')) {
            $domain = 'http://' . $domain;
        }
        $this->options['base_uri'] = $domain;

        return $this;
    }

    public function setMethod($method)
    {
        $this->method = strtoupper($method);
        return $this;
    }

    public function send($path = '')
    {
        $client = new \GuzzleHttp\Client($this->options);

        $result = $client->request($this->method, $path);
        unset($client);

        $body     = $result->getBody();
        $response = new HttpResponse();

        $response->guzzle_response = $result;

        $response->headers = $result->getHeaders();
        $content_type      = $result->getHeaderLine('Content-Type');
        $response->content = (string)$body;
        if ($content_type) {
            $mimes = new MimeTypes();
            $tmp   = explode(';', $content_type);
            foreach ($tmp as $row) {
                $mime = $mimes->getExtension($row);
                if ($mime) {
                    $response->content_type = $mime;
                    break;
                }
            }
            if ($response->content_type === 'json') {
                $response->data = new ArrayMap(@json_decode($response->content, true));
            } elseif ($response->content_type === 'xml') {
                $response->data = new ArrayMap(XMLParser::decode($response->content));
            }
        }
        $response->body   = $body;
        $response->status = $result->getStatusCode();
        unset($result, $mimes);

        return $response;
    }
}
