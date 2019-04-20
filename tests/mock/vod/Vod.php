<?php

namespace aliyun\sdk\tests\mock\vod;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;

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
class Vod extends ProductAbstract
{
    use ProductTrait;

    protected $product = "vod";

    protected $endpoints = [
        "regions" => [
            "cn-hangzhou",
            "cn-shanghai"
        ],
        "public"  => [
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
        ]
    ];

    protected $version;

    protected $credential = "AccessKeyCredential";
}