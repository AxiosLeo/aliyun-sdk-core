<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-04-14 18:52
 */

namespace aliyun\sdk\core\credentials;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\exception\UnsupportedRegionIdException;
use aliyun\sdk\core\lib\Request;
use aliyun\sdk\core\sign\RpcSignature;
use api\tool\Http;

abstract class CredentialsAbstract implements CredentialsInterface
{
    private $endpoints;

    private $product;

    private $service_code;

    private $region_id;

    protected function setDomain(Request &$request)
    {
        $this->endpoints    = $request->endpoints();
        $this->product      = $request->product();
        $this->service_code = $request->serviceCode();
        $this->region_id    = $request->region();

        if (!empty($this->endpoints)) {
            $endpoint = Aliyun::$internal ? $this->getInternalEndpoint() : $this->getPublicEndpoint();
            if (empty($endpoint)) {
                return $this->notFound();
            }
            return $endpoint;
        }

        return $this->notFound();
    }

    private function getInternalEndpoint()
    {
        $endpoint = "";
        if (!empty($this->endpoints["internal"][$this->region_id])) {
            $endpoint = $this->endpoints["internal"][$this->region_id];
        }

        return $endpoint;
    }

    private function getPublicEndpoint()
    {
        $endpoint = "";
        if (isset($this->endpoints["public"][$this->region_id])) {
            $endpoint = $this->endpoints["public"][$this->region_id];
        }
        return $endpoint;
    }

    private function notFound()
    {
        if (!empty($this->service_code)) {
            $response = $this->describeEndpoints();
            if ($response->getData("Success")) {
                $endpoints = $response->getData("Endpoints.Endpoint");
                foreach ($endpoints as $endpoint) {
                    if (strtolower($this->service_code) == $endpoint["SerivceCode"]) {
                        return $endpoint["Endpoint"];
                    }
                }
            }
        }

        throw new UnsupportedRegionIdException($this->product, $this->region_id, $this->endpoints);
    }

    private function describeEndpoints()
    {
        $signature_once = md5(uniqid() . "signature_once");
        $timestamp      = gmdate("Y-m-d\TH:i:s\Z");
        $param          = [
            "Id"               => $this->region_id,
            "ServiceCode"      => $this->service_code,
            "Type"             => "openAPI",
            "RegionId"         => "cn-hangzhou",
            "AccessKeyId"      => Aliyun::getAccessKeyId(),
            "Format"           => "JSON",
            "SignatureMethod"  => "HMAC-SHA256",
            "SignatureVersion" => "1.0",
            "SignatureNonce"   => $signature_once,
            "Timestamp"        => $timestamp,
            "Action"           => "DescribeEndpoints",
            "Version"          => "2015-06-12"
        ];

        $DefaultSignature   = new RpcSignature();
        $param["Signature"] = $DefaultSignature->setParams($param)->setMethod("get")->getSign();

        return Http::instance()->setDomain("location.aliyuncs.com")
            ->setMethod("GET")
            ->setParam($param)
            ->curl();
    }
}