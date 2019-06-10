<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-05-24 14:12
 */

namespace aliyun\sdk\core\lib;

use aliyun\sdk\Aliyun;

class RpcRequest extends Request
{
    public function __construct()
    {
        $this->region = Aliyun::region();
    }

    public function __call($name, $arguments)
    {
        if (false !== strpos($name, "get")) {
            $name = str_replace("get", "", $name);
            $name = str_replace("_", ".", $name);
            return $this->params($name);
        }
        $name = str_replace("set", "", $name);
        $name = str_replace("_", ".", $name);
        $this->params($name, $arguments[0]);
        return $this;
    }
}