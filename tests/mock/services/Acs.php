<?php

namespace aliyun\sdk\tests\mock\services;

use aliyun\sdk\core\lib\ProductAbstract;
use aliyun\sdk\core\traits\ProductTrait;
use aliyun\sdk\tests\mock\runtime\Acs20150101;

/**
 * Class Acs.
 *
 * @method Acs20150101 V20150101() static
 */
class Acs extends ProductAbstract
{
    use ProductTrait;

    protected $product = 'Acs';

    protected $service_code = 'acs';

    protected $credential = 'RoaCredential';

    protected $sdk_type = 'roa';

    protected $endpoints = [
        'regions'  => [
            'cn-hangzhou',
        ],
        'public'   => [
            'cn-hangzhou' => 'acs.aliyun-inc.com',
        ],
        'internal' => [
        ],
    ];
}
