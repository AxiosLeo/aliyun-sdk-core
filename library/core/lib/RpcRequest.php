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
}