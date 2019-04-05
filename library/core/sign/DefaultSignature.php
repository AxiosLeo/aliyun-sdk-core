<?php
/**
 * @author  : axios
 * @email   : axiosleo@foxmail.com
 * @blog    :  http://hanxv.cn
 * @datetime: 2018/2/2 13:49
 */

namespace aliyun\sdk\core\sign;

use aliyun\sdk\Aliyun;

final class DefaultSignature extends Signature
{
    public function getSign(): string
    {
        $signature = $this->hMacSha1($this->paramString(), Aliyun::getAccessSecret() . "&");
        return $signature;
    }

    private function paramString()
    {
        //按参数名排序
        ksort($this->params);

        $param_string = "";
        $n            = 0;
        foreach ($this->params as $k => $v) {
            //对参数名称和参数值进行 URL 编码
            $k = rawurlencode($k);
            $v = rawurlencode($v);
            //对编码后的参数名称和值使用英文等号（=）进行连接
            if ($n != 0) {
                $param_string .= "&";
            }
            $param_string .= $k . "=" . $v;
            $n++;
        }

        return $this->method . "&" . rawurlencode("/") . "&" . rawurlencode($param_string);
    }
}