<?php

declare(strict_types=1);

namespace aliyun\sdk\tests\feature;

use aliyun\sdk\Aliyun;
use aliyun\sdk\tests\mock\services\Vod;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class VodTest extends TestCase
{
    public function testRequest()
    {
        Aliyun::auth(getenv('ACCESS_KEY_ID'), getenv('ACCESS_KEY_SECRET'));
        Aliyun::region('cn-hangzhou');
        $result = Vod::V20170321()->GetCategories()
            ->setCateId(-1)
            ->request();
        $data = $result->getData('SubCategories.Category');
        $this->assertEquals(3, \count($data));
    }
}
