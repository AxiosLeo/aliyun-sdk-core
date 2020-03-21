<?php

declare (strict_types = 1);

namespace aliyun\sdk\tests\feature;

use aliyun\sdk\Aliyun;
use aliyun\sdk\tests\mock\services\Kms;
use PHPUnit\Framework\TestCase;

class KmsTest extends TestCase
{
    public function testRequest()
    {
        Aliyun::auth(getenv("ACCESS_KEY_ID"), getenv("ACCESS_KEY_SECRET"));
        Aliyun::region("cn-shanghai");
        $request = Kms::V20160120()->ListKeys();
        $request->protocol("https");
        $result = $request->request();

        $this->assertEquals(36, strlen($result->getData('RequestId')));
    }
}