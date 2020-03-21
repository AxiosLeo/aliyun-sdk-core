<?php

namespace aliyun\sdk\core\help;

class SignatureNonce
{
    public static function get($salt)
    {
        return md5($salt . uniqid(md5(microtime(true)), true));
    }
}
