<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-04-15 09:39
 */

namespace aliyun\sdk\tests\mock\vod;

/**
 * Class Vod
 *
 * @package aliyun\sdk\tests\mock\vod
 * @method VodClient V20170321() static
 */
class Vod
{
    protected static $client = [];

    public static function __callStatic($name, $arguments)
    {
        if (!isset(self::$client[$name])) {
            $version             = substr($name, 1, 4) . "-" . substr($name, 5, 2) . "-" . substr($name, 7, 2);
            self::$client[$name] = new VodClient($version);
        }
        return self::$client[$name];
    }
}