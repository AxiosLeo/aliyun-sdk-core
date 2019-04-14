<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-26 17:40
 */

namespace aliyun\sdk\tests\mock\vod;

use aliyun\sdk\core\lib\ClientInterface;
use aliyun\sdk\core\lib\Request;

/**
 * Class VodCommon
 *
 * @package aliyun\sdk\tests\mock\vod
 * @method GetCategories GetCategories() static
 */
class VodClient extends Request implements ClientInterface
{
    use \aliyun\sdk\core\traits\ClientTrait;

    protected $product = 'Vod';

    protected $method = "POST";

    protected $domain = "";

    public $endpoints = [
        "global"         => "vod.aliyuncs.com",
        "ap-northeast-1" => "vod.ap-northeast-1.aliyuncs.com",
        "ap-south-1"     => "vod.ap-northeast-1.aliyuncs.com",
        "ap-southeast-1" => "vod.ap-southeast-1.aliyuncs.com",
        "ap-southeast-2" => "vod.ap-northeast-1.aliyuncs.com",
        "ap-southeast-3" => "vod.ap-northeast-1.aliyuncs.com",
        "ap-southeast-5" => "vod.ap-southeast-5.aliyuncs.com",
        "cn-beijing"     => "vod.cn-beijing.aliyuncs.com",
        "cn-shanghai"    => "vod.cn-shanghai.aliyuncs.com",
        "cn-shenzhen"    => "vod.cn-shanghai.aliyuncs.com",
        "eu-central-1"   => "vod.eu-central-1.aliyuncs.com",
        "eu-west-1"      => "vod.ap-northeast-1.aliyuncs.com",
        "me-east-1"      => "vod.ap-northeast-1.aliyuncs.com",
        "us-east-1"      => "vod.ap-northeast-1.aliyuncs.com",
        "us-west-1"      => "vod.ap-northeast-1.aliyuncs.com"
    ];

    protected $action_list = [
        "GetCategories" => "2017-03-21"
    ];

    /**
     * @var string
     */
    protected $container = VodAction::class;
}