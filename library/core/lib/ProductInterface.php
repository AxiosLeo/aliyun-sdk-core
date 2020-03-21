<?php

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
