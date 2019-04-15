<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-04-14 19:36
 */

namespace aliyun\sdk\core\traits;

trait ActionTrait
{
    use RequestTrait;

    public function __construct($product, $endpoints, $version, $action)
    {
        $this->product   = $product;
        $this->endpoints = $endpoints;
        $this->version   = $version;
        $this->action    = $action;
    }
}