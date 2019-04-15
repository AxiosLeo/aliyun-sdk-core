<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-26 17:40
 */

namespace aliyun\sdk\tests\mock\vod;

/**
 * Class VodCommon
 *
 * @package aliyun\sdk\tests\mock\vod
 * @method GetCategories GetCategories()
 */
class VodClient
{
    protected $product = "Vod";

    protected $actionClient = "VodAction";

    /**
     * @var VodAction[]
     */
    protected $instance;

    protected $version;

    protected $endpoints = [
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

    public function __construct($version)
    {
        $this->version = $version;
    }

    public function __call($action, $arguments)
    {
        if (is_null($this->instance)) {
            $class                   = __NAMESPACE__ . "\\" . $this->actionClient;
            $this->instance[$action] = new $class($this->product, $this->endpoints, $this->version, $action);
        }
        return $this->instance[$action];
    }
}