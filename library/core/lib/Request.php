<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-18 14:24
 */

namespace aliyun\sdk\core\lib;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\credentials\AccessKeyCredential;
use aliyun\sdk\core\credentials\CredentialsInterface;
use api\tool\Http;
use api\tool\lib\HttpResponse;

/**
 * Class Request
 *
 * @package aliyun\sdk\core\lib
 * @method string product($product = null)
 * @method string action($action = null)
 * @method string region($region = null)
 * @method string version($version = null)
 * @method string method($method = null)
 * @method string path($path = null)
 * @method string domain($domain = null)
 */
class Request
{
    protected $product = "";

    protected $action = "";

    protected $version = "";

    private $region = "";

    private $params = [];

    private $headers = [];

    private $options = [];

    private $path = "/";

    private $format = "JSON";

    private $method = "POST";

    private $domain = "";

    public function params($key = null, $value = null)
    {
        if (is_null($key)) {
            return $this->params;
        }
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                $this->params[$k] = $v;
            }
        } else {
            $this->params[$key] = $value;
        }
        return $this;
    }

    public function headers($key = null, $value = null)
    {
        if (is_null($key)) {
            return $this->headers;
        }
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                $this->headers[$k] = $v;
            }
        } else {
            $this->headers[$key] = $value;
        }
        return $this;
    }

    public function options($key = null, $value = null)
    {
        if (is_null($key)) {
            return $this->options;
        }
        if (is_array($key)) {
            foreach ($key as $k => $v) {
                $this->options[$k] = $v;
            }
        } else {
            $this->options[$key] = $value;
        }
        return $this;
    }

    public function format($format = null)
    {
        if (!is_null($format)) {
            $this->format = strtoupper($format);
        }
        return $this->format;
    }

    /**
     * @param CredentialsInterface|null $credentials
     *
     * @return HttpResponse
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(CredentialsInterface $credentials = null)
    {
        if (is_null($credentials)) {
            $credentials = new AccessKeyCredential();
        }

        if (empty($this->region)) {
            $this->region = Aliyun::region();
        }

        $credentials->init($this);

        $response = Http::instance()->setMethod($this->method)
            ->setOption($this->options)
            ->setDomain($this->domain)
            ->setHeader($this->headers)
            ->setParam($this->params)
            ->curl($this->path);

        return Aliyun::response($response);
    }

    private function property($property, $value = null)
    {
        if (!is_null($value)) {
            $this->$property = $value;
        }
        return $this->$property;
    }

    /**
     * @param $name
     * @param $arguments
     *
     * @return string
     */
    public function __call($name, $arguments)
    {
        $list = [
            "product", "action", "version", "method", "path", "region", "domain"
        ];
        if (in_array($name, $list)) {
            array_unshift($arguments, $name);
            return call_user_func_array([$this, "property"], $arguments);
        }
        return "";
    }
}