<?php

namespace aliyun\sdk\core\lib;

use aliyun\sdk\Aliyun;

class RpcRequest extends Request
{
    public function __construct()
    {
        $this->region = Aliyun::region();
        $this->params('SignatureMethod', 'HMAC-SHA1');
        $this->params('SignatureVersion', '1.0');
    }

    public function __call($name, $arguments)
    {
        if (false !== strpos($name, 'get')) {
            $name = str_replace('get', '', $name);
            $name = str_replace('_', '.', $name);

            return $this->params($name);
        }
        $name = str_replace('set', '', $name);
        $name = str_replace('_', '.', $name);
        $this->params($name, $arguments[0]);

        return $this;
    }
}
