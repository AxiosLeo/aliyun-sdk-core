<?php

namespace aliyun\sdk\core\traits;

use aliyun\sdk\core\lib\Client;
use aliyun\sdk\core\lib\ClientInterface;
use aliyun\sdk\core\lib\ProductInterface;

trait ProductTrait
{
    /**
     * @var ClientInterface[]
     */
    protected static $client = [];

    public function __construct($version = null)
    {
        $this->version = substr($version, 1, 4) . '-' . substr($version, 5, 2) . '-' . substr($version, 7, 2);
    }

    public static function __callStatic($version, $arguments)
    {
        if (!isset(self::$client[$version])) {
            /**
             * @var ProductInterface $product
             */
            $product = new self($version);

            self::$client[$version] = new Client();
            self::$client[$version]->init($product);
        }

        return self::$client[$version];
    }
}
