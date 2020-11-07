<?php

namespace aliyun\sdk\core\sign;

use aliyun\sdk\Aliyun;

final class RpcSignature extends Signature
{
    public function getSign(): string
    {
        return $this->encode($this->paramString(), Aliyun::getAccessSecret() . '&');
    }

    private function paramString()
    {
        //按参数名排序
        ksort($this->params);

        $params = [];
        foreach ($this->params as $k => $v) {
            //对参数名称和参数值进行 URL 编码
            $k = rawurlencode($k);
            $v = rawurlencode($v);
            //对编码后的参数名称和值使用英文等号（=）进行连接
            array_push($params, $k . '=' . $v);
        }
        $this->params_string = implode('&', $params);

        return $this->method . '&' . rawurlencode('/') . '&' . rawurlencode($this->params_string);
    }
}
