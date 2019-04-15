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
use aliyun\sdk\core\traits\ActionTrait;
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
 * @method array  endpoints()
 */
class Request
{
    use ActionTrait;

    protected $product = "";

    protected $action = "";

    protected $version = "";

    protected $region = "";

    private $params = [];

    private $headers = [];

    private $options = [];

    private $path = "/";

    private $format = "JSON";

    private $method = "POST";

    protected $domain = "";

    protected $endpoints = [];

    public function params($key = null, $value = null)
    {
        if (is_null($key)) {
            return $this->params;
        }
        if (is_null($value)) {
            return isset($this->params[$key]) ? $this->params[$key] : null;
        }
        $this->params[$key] = $value;
        return $this;
    }

    public function headers($key = null, $value = null)
    {
        if (is_null($key)) {
            return $this->headers;
        }
        $this->headers[$key] = $value;
        return $this;
    }

    public function options($key = null, $value = null)
    {
        if (is_null($key)) {
            return $this->options;
        }
        $this->options[$key] = $value;
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

    protected function property($property, $value = null)
    {
        if (!is_null($value)) {
            $this->$property = $value;
        }
        return $this->$property;
    }
}