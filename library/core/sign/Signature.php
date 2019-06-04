<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/2 13:49
 */

namespace aliyun\sdk\core\sign;

abstract class Signature
{
    protected $product;

    protected $headers;

    protected $params;

    protected $method;

    protected $path;

    protected $params_string;

    public function setProduct($product)
    {
        $this->product = $product;
        return $this;
    }

    public function setMethod($method)
    {
        $this->method = strtoupper($method);
        return $this;
    }

    public function setHeaders($headers)
    {
        $this->headers = $headers;
        return $this;
    }

    public function setParams($params)
    {
        $this->params = $params;
        return $this;
    }

    public function setPath($path)
    {
        $this->path = $path;
        return $this;
    }

    protected function hMacSha1($string, $key)
    {
        $signature = base64_encode(hash_hmac('sha1', $string, $key, true));
        return $signature;
    }

    protected function hMacSha256($string, $key)
    {
        $signature = base64_encode(hash_hmac('sha256', $string, $key, true));
        return $signature;
    }

    abstract public function getSign(): string;
}