<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-18 15:00
 */

namespace aliyun\sdk\core\help;

class SignatureNonce
{
    public static function get($salt)
    {
        return md5($salt . uniqid(md5(microtime(true)), true));
    }
}