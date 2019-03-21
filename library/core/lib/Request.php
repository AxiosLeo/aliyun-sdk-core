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
use api\tool\lib\ArrayTool;
use api\tool\lib\HttpResponse;

class Request
{
    public $product = "";

    public $action = "";

    public $region = "";

    public $version = "";

    public $params;

    public $headers;

    public $options;

    private $request_method = "POST";

    public $path = "/";

    public $format = "JSON";

    public function __construct()
    {
        $this->params  = ArrayTool::instance([]);
        $this->headers = ArrayTool::instance([]);
        $this->options = ArrayTool::instance([]);
    }

    public function method($method = null)
    {
        if (!is_null($method)) {
            $this->request_method = $method;
        }
        return $this->request_method;
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
        $domain = "https://" . Endpoints::domain($this->region, $this->product);

        $http              = Http::instance();
        $guzzleHttpOptions = $credentials->guzzleHttpOptions();
        if (!empty($guzzleHttpOptions)) {
            $http->setOption($guzzleHttpOptions);
        }
        $response = $http->setMethod($this->request_method)
            ->setDomain($domain)
            ->setHeader($credentials->headers())
            ->setParam($credentials->params())
            ->curl($this->path);

        return Aliyun::response($response);
    }
}