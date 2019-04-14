<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/3/15 10:35
 */

namespace aliyun\sdk\core\traits;

use aliyun\sdk\core\lib\ClientInterface;

trait ClientTrait
{
    /**
     * @var ClientInterface
     */
    private static $clientInstance;

    /**
     * @var ClientInterface[]
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
            self::$actionInstance[$name]->initAction($name);
        }

        return self::$actionInstance[$name];
    }

    public function initAction($action_name)
    {
        $this->action($action_name);
        $this->version($this->action_list[$action_name]);
    }
}