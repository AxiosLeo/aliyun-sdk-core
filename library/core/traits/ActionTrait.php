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
    public function __call($name, $arguments)
    {
        $list = [
            "product", "action", "version", "method", "path", "region", "domain"
        ];
        if (in_array($name, $list)) {
            array_unshift($arguments, $name);
            return call_user_func_array([$this, "property"], $arguments);
        }
        if (empty($arguments)) {
            $name = str_replace("get", "", $name);
            return $this->params($name);
        }
        $name = str_replace("set", "", $name);
        $this->params($name, $arguments[0]);
        return $this;
    }
}