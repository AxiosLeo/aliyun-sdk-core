<?php

namespace aliyun\sdk\tests\mock\vod;

/**
 * Class VodClient
 *
 * @package aliyun\sdk\tests\mock\vod
 */
class VodClient
{
    protected $product = "vod";

    /**
     * @var VodAction[]
     */
    protected $instance;

    protected $version;

    protected $endpoints = [
        "ap-northeast-1" => "vod.ap-northeast-1.aliyuncs.com",
        "ap-south-1"     => "vod.ap-northeast-1.aliyuncs.com",
        "ap-southeast-1" => "vod.ap-southeast-1.aliyuncs.com",
        "ap-southeast-2" => "vod.ap-northeast-1.aliyuncs.com",
        "ap-southeast-3" => "vod.ap-northeast-1.aliyuncs.com",
        "ap-southeast-5" => "vod.ap-southeast-5.aliyuncs.com",
        "cn-beijing"     => "vod.cn-beijing.aliyuncs.com",
        "cn-chengdu"     => "vod.aliyuncs.com",
        "cn-hangzhou"    => "vod.cn-shanghai.aliyuncs.com",
        "cn-hongkong"    => "vod.aliyuncs.com",
        "cn-huhehaote"   => "vod.aliyuncs.com",
        "cn-qingdao"     => "vod.aliyuncs.com",
        "cn-shanghai"    => "vod.cn-shanghai.aliyuncs.com",
        "cn-shenzhen"    => "vod.cn-shanghai.aliyuncs.com",
        "cn-zhangjiakou" => "vod.aliyuncs.com",
        "eu-central-1"   => "vod.eu-central-1.aliyuncs.com",
        "eu-west-1"      => "vod.ap-northeast-1.aliyuncs.com",
        "me-east-1"      => "vod.ap-northeast-1.aliyuncs.com",
        "us-east-1"      => "vod.ap-northeast-1.aliyuncs.com",
        "us-west-1"      => "vod.ap-northeast-1.aliyuncs.com",

    ];

    public function __construct($version)
    {
        $this->version = $version;
    }

    public function __call($action, $arguments)
    {
        if (is_null($this->instance)) {
            $this->instance[$action] = new VodAction($this->product, $this->endpoints, $this->version, $action);
        }
        return $this->instance[$action];
    }
}