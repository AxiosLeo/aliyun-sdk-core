<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/2 13:34
 */

namespace aliyun\sdk;

class Aliyun
{
    private static $access_key_id;

    private static $access_secret;

    private static $security_token;

    private static $region_id;

    private static $response;

    /**
     * @param string $accessKeyId
     * @param string $accessSecret
     * @param null   $security_token
     */
    public static function auth($accessKeyId = '', $accessSecret = '', $security_token = null)
    {
        self::$access_key_id  = $accessKeyId;
        self::$access_secret  = $accessSecret;
        self::$security_token = is_null($security_token) ? md5('SignatureNonce' . uniqid(md5(microtime(true)), true)) : $security_token;
    }

    public static function region($region_id = null)
    {
        if (!is_null($region_id)) {
            self::$region_id = $region_id;
        }
        return self::$region_id;
    }

    public static function response($response = null)
    {
        if (!is_null($response)) {
            self::$response = $response;
        }

        return self::$response;
    }

    public static function getAccessKeyId($access_key_id = null)
    {
        if (!is_null($access_key_id)) {
            self::$access_key_id = $access_key_id;
        }
        return self::$access_key_id;
    }

    public static function getAccessSecret($access_secret = null)
    {
        if (!is_null($access_secret)) {
            self::$access_secret = $access_secret;
        }
        return self::$access_secret;
    }

    public static function getSecurityToken($security_token = null)
    {
        if ($security_token) {
            self::$security_token = $security_token;
        }
        return self::$security_token;
    }
}
