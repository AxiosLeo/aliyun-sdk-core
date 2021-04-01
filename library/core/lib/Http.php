<?php

declare(strict_types=1);

namespace aliyun\sdk\core\lib;

use aliyun\sdk\core\help\ArrayMap;
use aliyun\sdk\core\help\MimeTypes;
use aliyun\sdk\core\help\XMLParser;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;

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
        try {
            $client = new \GuzzleHttp\Client($this->options);

            $result = $client->request($this->method, $path);
        } catch (ClientException $e) {
            $result = $e->getResponse();
        } catch (ServerException $e) {
            $result = $e->getResponse();
        }

        unset($client);

        $body     = $result->getBody();
        $response = new HttpResponse();

        $response->guzzle_response = $result;

        $response->headers = $result->getHeaders();
        $content_type      = $result->getHeaderLine('Content-Type');
        $response->content = (string) $body;
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
            if ('json' === $response->content_type) {
                $response->data = new ArrayMap(@json_decode($response->content, true));
            } elseif ('xml' === $response->content_type) {
                $response->data = new ArrayMap(XMLParser::decode($response->content));
            }
        }
        $response->body   = $body;
        $response->status = $result->getStatusCode();
        unset($result, $mimes);

        return $response;
    }
}
