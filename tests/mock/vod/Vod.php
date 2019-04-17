<?php

namespace aliyun\sdk\tests\mock\vod;

/**
 * Class Vod
 *
 * @package aliyun\sdk\tests\mock\vod
 * @method \aliyun\sdk\tests\mock\vod\version20170713\V20170713 V20170713() static
 * @method \aliyun\sdk\tests\mock\vod\version20170510\V20170510 V20170510() static
 * @method \aliyun\sdk\tests\mock\vod\version20170426\V20170426 V20170426() static
 * @method \aliyun\sdk\tests\mock\vod\version20170420\V20170420 V20170420() static
 * @method \aliyun\sdk\tests\mock\vod\version20170321\V20170321 V20170321() static
 * @method \aliyun\sdk\tests\mock\vod\version20170314\V20170314 V20170314() static
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