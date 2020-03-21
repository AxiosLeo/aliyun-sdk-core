<?php

namespace aliyun\sdk\core\credentials;

use aliyun\sdk\core\lib\Request;

interface CredentialsInterface
{
    public function init(Request &$request): void;
}
