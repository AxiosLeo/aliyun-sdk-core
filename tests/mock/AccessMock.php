<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-26 17:43
 */

namespace aliyun\sdk\tests\mock;

class AccessMock
{
    public static function getAccessKeyId()
    {
        return self::getEnv("ACCESS_KEY_ID");
    }

    public static function getAccessKeySecret()
    {
        return self::getEnv("ACCESS_KEY_SECRET");
    }

    private static function getEnv($name, $default = "")
    {
        $value = getenv($name);
        if (empty($value)) {
            return $default;
        }
        return $value;
    }
}