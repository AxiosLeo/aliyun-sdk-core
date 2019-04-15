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
use aliyun\sdk\core\sign\DefaultSignature;
use aliyun\sdk\Option;
use api\tool\Http;

class Endpoints
{
    /**
     * @var self
     */
    private static $instance;

    private static $endpoints = [];

    public static function endpoints($product_name)
    {
        if (!isset(self::$endpoints[$product_name])) {
            $path = Option::packagePath() . "data/endpoints/" . $product_name . ".json";
            if (file_exists($path)) {
                $products = file_get_contents($path);
                $products = json_decode($products, true);

                self::$endpoints[$product_name] = $products;
            } else {
                self::$endpoints[$product_name] = [];
            }
        }
        return self::$endpoints[$product_name];
    }

    public static function checkDomainExist($region_id, $product_name)
    {
        try {
            self::domain($region_id, $product_name);
            return true;
        } catch (DomainNotExistException $e) {
            return false;
        }
    }

    public static function domain($region_id, $product_name)
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        $endpoints = self::endpoints($product_name);
        if (isset($endpoints[$region_id])) {
            return $endpoints[$region_id];
        }

        return self::$instance->notFound($region_id, $product_name);
    }

    private function addDomain($region_id, $product_name, $domain)
    {
        if (!isset(self::$endpoints[$product_name])) {
            self::$endpoints[$product_name] = [];
        }
        self::$endpoints[$product_name][$region_id] = $domain;
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
            "AccessKeyId"      => Aliyun::getAccessKeyId(),
            "Format"           => "JSON",
            "SignatureMethod"  => "HMAC-SHA1",
            "SignatureVersion" => "1.0",
            "SignatureNonce"   => $signature_once,
            "Timestamp"        => $timestamp,
            "Action"           => "DescribeEndpoints",
            "Version"          => "2015-06-12"
        ];

        $DefaultSignature   = new DefaultSignature();
        $param["Signature"] = $DefaultSignature->setParams($param)->setMethod("get")->getSign();

        $response = Http::instance()->setDomain("location.aliyuncs.com")
            ->setMethod("GET")
            ->setParam($param)
            ->curl();
        return $response;
    }
}