<?php

namespace aliyun\sdk\tests\mock\vod;

/**
 * Class Vod
 *
 * @package aliyun\sdk\services\vod
 * @method VodClient V20170713() static
 * @method VodClient V20170510() static
 * @method VodClient V20170426() static
 * @method VodClient V20170420() static
 * @method VodClient V20170321() static
 * @method VodClient V20170314() static
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