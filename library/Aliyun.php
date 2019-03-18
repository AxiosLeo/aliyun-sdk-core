<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/2 13:34
 */

namespace aliyun\sdk;

defined('ALIYUN_SDK_PATH') or define('ALIYUN_SDK_PATH', __DIR__ . DIRECTORY_SEPARATOR);

class Aliyun
{
    public static $access_key_id;

    public static $access_secret;

    public static $security_token;

    public static $region_id;

    public static $response;

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
        self::$region_id = is_null($region_id) ? self::$region_id : $region_id;

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
        return is_null($access_key_id) ? Aliyun::$access_key_id : $access_key_id;
    }

    public static function getAccessSecret($access_secret = null)
    {
        return is_null($access_secret) ? Aliyun::$access_secret : $access_secret;
    }
}
