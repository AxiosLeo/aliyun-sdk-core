<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-14 14:59
 */

namespace aliyun\sdk\core\lib;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\exception\DomainNotExistException;
use aliyun\sdk\core\sign\HmacSHA1;
use api\tool\Http;
use Symfony\Component\Cache\Adapter\FilesystemAdapter;

class Endpoints
{
    private static $instance;

    private static $products = [];

    private const CACHE_KEY = "aliyun_sdk_endpoints_cache_key";

    public static function domain($region_id, $product_name)
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        if (empty(self::$products)) {
            $products = self::$instance->cache();
            if (false === $products) {
                $products = file_get_contents(ALIYUN_SDK_PATH . "data/products.json");
                $products = json_decode($products, true);
                self::$instance->cache($products);
            }
            self::$products = $products;
        }

        if (isset(self::$products[$product_name])) {
            if (isset(self::$products[$product_name][$region_id])) {
                return self::$products[$product_name][$region_id];
            } else {
                return self::$instance->notFound($region_id, $product_name);
            }
        }

        return self::$instance->notFound($region_id, $product_name);
    }

    private function addDomain($region_id, $product_name, $domain)
    {
        self::$products[$product_name][$region_id] = $domain;
        $this->cache(self::$products);
    }

    private function cache($products = null)
    {
        $cache = new FilesystemAdapter();
        if (is_null($products)) {
            if (!$cache->hasItem(self::CACHE_KEY)) {
                return false;
            }
            $item = $cache->getItem(self::CACHE_KEY);
            return $item->get();
        }
        $item = $cache->getItem(self::CACHE_KEY);
        $item->set($products);
        $cache->save($item);
        return $products;
    }

    private function notFound($region_id = null, $product_name = null)
    {
        $response = $this->describeEndpoints($region_id, $product_name);
        if ($response->getData("Success")) {
            $endpoints = $response->getData("Endpoints.Endpoint");
            foreach ($endpoints as $endpoint) {
                if (strtolower($product_name) == $endpoint["SerivceCode"]) {
                    $domain = $endpoint["Endpoint"];
                    $this->addDomain($region_id, $product_name, $domain);
                    return $domain;
                }
            }
        }
        throw new DomainNotExistException("domain not found : maybe $region_id is not support for $product_name");
    }

    private function describeEndpoints($region_id, $product)
    {
        $signature_once = md5(uniqid() . "signature_once");
        $timestamp      = gmdate("Y-m-d\TH:i:s\Z");
        $param          = [
            "Id"               => $region_id,
            "ServiceCode"      => $product,
            "Type"             => "openAPI",
            "RegionId"         => "cn-hangzhou",
            "AccessKeyId"      => Aliyun::$access_key_id,
            "Format"           => "JSON",
            "SignatureMethod"  => "HMAC-SHA1",
            "SignatureVersion" => "1.0",
            "SignatureNonce"   => $signature_once,
            "Timestamp"        => $timestamp,
            "Action"           => "DescribeEndpoints",
            "Version"          => "2015-06-12"
        ];

        $HmacSha1  = new HmacSHA1();
        $signature = $HmacSha1->setParams($param)->setMethod("get")->getSign();

        $param["Signature"] = $signature;

        $response = Http::instance()->setDomain("location.aliyuncs.com")
            ->setMethod("GET")
            ->setParam($param)
            ->curl();
        return $response;
    }
}