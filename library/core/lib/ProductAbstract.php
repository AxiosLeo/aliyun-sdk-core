<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-04-20 19:37
 */

namespace aliyun\sdk\core\lib;

class ProductAbstract implements ProductInterface
{
    protected $product;

    protected $endpoints;

    protected $version;

    protected $credential;

    protected $service_code;

    protected $protocol;

    protected $sdk_type = "rpc";

    public function productId()
    {
        return $this->product;
    }

    public function versionDate()
    {
        return $this->version;
    }

    public function endpoints()
    {
        return $this->endpoints;
    }

    public function credential()
    {
        return $this->credential;
    }

    public function serviceCode()
    {
        return empty($this->service_code) ? null : $this->service_code;
    }

    public function protocol()
    {
        if (empty($this->protocol)) {
            $this->protocol = "http";
        }
        return $this->protocol;
    }

    public function sdk_type()
    {
        return empty($this->sdk_type) ? "rpc" : $this->sdk_type;
    }
}