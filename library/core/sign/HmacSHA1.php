<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/2 13:49
 */

namespace aliyun\sdk\core\sign;

use aliyun\sdk\Aliyun;

class HmacSHA1 extends Signature
{
    public function getSign(): string
    {
        $signature = base64_encode(hash_hmac('sha1', $this->paramString(), Aliyun::$access_secret . "&", true));
        return $signature;
    }
}