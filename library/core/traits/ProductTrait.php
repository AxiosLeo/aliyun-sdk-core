<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-04-20 19:53
 */

namespace aliyun\sdk\core\traits;

use aliyun\sdk\core\lib\Client;
use aliyun\sdk\core\lib\ProductInterface;

trait ProductTrait
{
    /**
     * @var Client[]
     */
    protected static $client = [];

    public static function __callStatic($version, $arguments)
    {
        if (!isset(self::$client[$version])) {
            /*** @var ProductInterface $product ** */
            $product                = new self($version);
            self::$client[$version] = new Client();
            self::$client[$version]->init($product);
        }
        return self::$client[$version];
    }

    public function __construct($version)
    {
        $this->version = substr($version, 1, 4) . "-" . substr($version, 5, 2) . "-" . substr($version, 7, 2);
    }
}