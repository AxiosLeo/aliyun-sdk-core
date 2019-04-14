<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 10:35
 */

namespace aliyun\sdk\core\traits;

use aliyun\sdk\core\lib\Request;

trait ClientTrait
{
    /**
     * @var Request
     */
    private static $clientInstance;

    /**
     * @var Request[]
     */
    private static $actionInstance = [];

    public static function __callStatic($name, $arguments)
    {
        if (is_null(self::$clientInstance)) {
            self::$clientInstance = new self();
        }

        if (!isset(self::$actionInstance[$name])) {
            $class = self::$clientInstance->container;

            self::$actionInstance[$name] = new $class();
            self::$actionInstance[$name]->action($name);
        }

        return self::$actionInstance[$name];
    }
}