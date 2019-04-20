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
}