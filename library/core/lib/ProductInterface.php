<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-04-20 19:33
 */

namespace aliyun\sdk\core\lib;

interface ProductInterface
{
    public function productId();

    public function versionDate();

    public function endpoints();

    public function credential();

    public function serviceCode();

    public function protocol();

    public function sdk_type();
}