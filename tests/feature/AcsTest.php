<?php

declare(strict_types = 1);

namespace aliyun\sdk\tests\feature;

use aliyun\sdk\Aliyun;
use aliyun\sdk\tests\mock\services\Acs;
use PHPUnit\Framework\TestCase;

class AcsTest extends TestCase
{
    public function testRequest()
    {
        Aliyun::auth(getenv("ACCESS_KEY_ID"), getenv("ACCESS_KEY_SECRET"));
        Aliyun::region("cn-hangzhou");

        $request = Acs::V20150101()->GetProduct()
            ->format("xml");
        $request->curlPath("/Product/Ecs");
        $result = $request->method("get")->request();

        $this->assertEquals("ResourceNotFound.AccountBinding", $result->getData('Code'));
    }
}
