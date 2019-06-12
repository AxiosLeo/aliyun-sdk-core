<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-05-24 14:10
 */

namespace aliyun\sdk\core\lib;

use aliyun\sdk\Aliyun;

class RoaRequest extends Request
{
    public function __construct()
    {
        $this->region = Aliyun::region();
        $this->params("signature-method", "HMAC-SHA1");
        $this->params("signature-version", "1.0");
    }

    public function version($version = null)
    {
        $this->params("version", $version);
        return parent::version($version);
    }

    public function region($region = null)
    {
        $this->params("region-id", Aliyun::region());
        return parent::region($region);
    }

    public function __call($name, $arguments)
    {
        if (false !== strpos($name, "get")) {
            $name = str_replace("get", "", $name);
            $name = str_replace("_", "-", $name);
            return $this->params($name);
        }
        $name = str_replace("set", "", $name);
        $name = str_replace("_", "-", $name);
        $this->params($name, $arguments[0]);
        return $this;
    }
}