<?php

namespace aliyun\sdk\core\sign;

abstract class Signature
{
    protected $product;

    protected $headers;

    protected $params;

    protected $method;

    protected $path;

    protected $params_string;

    protected $sign_method = 'HMAC-SHA256';

    public function setSignMethod($sign_method)
    {
        $this->sign_method = $sign_method;

        return $this;
    }

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

    abstract public function getSign(): string;

    protected function hMacSha1($string, $key)
    {
        return base64_encode(hash_hmac('sha1', $string, $key, true));
    }

    protected function hMacSha256($string, $key)
    {
        return base64_encode(hash_hmac('sha256', $string, $key, true));
    }

    protected function encode($string, $key)
    {
        switch ($this->sign_method) {
            case 'HMAC-SHA256':
                return $this->hMacSha256($string, $key);
            case 'HMAC-SHA1':
                return $this->hMacSha1($string, $key);
        }

        throw new \RuntimeException("Invalid Signature Method : ({$this->sign_method})");
    }
}
