English | [简体中文](./README_CN.md)

> Aliyun Cloud Service SDK Core, composer library.

[![CI Build Status](https://github.com/AxiosCros/aliyun-sdk-core/workflows/CI/badge.svg)](https://github.com/AxiosCros/aliyun-sdk-core/actions?query=workflow%3ACI)
[![Latest Stable Version](https://poser.pugx.org/axios/aliyun-sdk-core/v/stable)](https://packagist.org/packages/axios/aliyun-sdk-core)
[![License](https://poser.pugx.org/axios/aliyun-sdk-core/license)](https://packagist.org/packages/axios/aliyun-sdk-core)

> [Aliyun Cloud official documentation center](https://help.aliyun.com/)

> QQ Group：521797692

---

## Env
- PHP 7.1+.
- CURL extension.

---

## Install
```shell
composer require axios/aliyun-sdk-core
```

---

## Customized Request


```php

use aliyun\sdk\core\lib\RpcRequest;

class AliyunProduct
{

    protected static $product = "<ProductName>";

    protected static $service_code = "<ProductServiceCode>";

    /**
     * @var string
     * @example \aliyun\sdk\core\credentials\AccessKeyCredential
     * @example AccessKeyCredential
     */
    protected static $credential = "<Credential>";

    protected static $version = "<VersionDate>";

    protected static $endpoints = [
        "regions"  => [],
        "public"   => [],
        "internal" => []
    ];

    /**
     * @param $action
     *
     * @return Request
     */
    public static function client($action = null)
    {
        $request = new RpcRequest(); // or RoaRequest
        $request->product(self::$product);
        $request->version(self::$version);
        $request->action($action);
        $request->endpoints(self::$endpoints);
        $request->credential(self::$credential);
        $request->serviceCode(self::$service_code);
        $request->protocol("https");
        return $request;
    }
}

```

---

## How to use
  > [aliyun-sdk/example](https://github.com/AxiosCros/aliyun-sdk/tree/master/example)

* require composer autoload

```php
require_once __DIR__. "/../vendor/autoload.php";
```

* Auth

```php
$access_id = "<AccessKeyId>";
$access_secret = "<AccessKeySecret>";

\aliyun\sdk\Aliyun::auth($access_id, $access_secret);
```

* Setting Region

```php
\aliyun\sdk\Aliyun::region('cn-hangzhou');
```

* request

```php
$request = AliyunProduct::client();

$request->method("POST");

$response = $request->params("key", "value")
    ->headers("header_name", "header_content")
    ->options("option_name", "option_value")
    ->request();
```

* Get Response Content

```php
$result = $response->getData();
```

> [Request Option](http://docs.guzzlephp.org/en/stable/request-options.html)


## License
licensed under the [MIT License](https://github.com/AxiosCros/aliyun-sdk-core/blob/master/LICENSE)
