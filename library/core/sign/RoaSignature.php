<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-05-22 13:47
 */

namespace aliyun\sdk\core\sign;

use aliyun\sdk\Aliyun;

class RoaSignature extends Signature
{
    private $headerSeparator = "\n";

    public function getSign(): string
    {
        $include = [
            "Accept",
            "Content-MD5",
            "Content-Type",
            "Date"
        ];

        $sign_string = strtoupper($this->method) . $this->headerSeparator;
        foreach ($include as $header_name) {
            $header      = isset($this->headers[$header_name]) ? $this->headers[$header_name] : "";
            $sign_string .= $header . $this->headerSeparator;
        }
        ksort($this->headers);

        foreach ($this->headers as $header_name => $header) {
            if (false !== strpos($header_name, "x-" . strtolower($this->product) . "-")) {
                $sign_string .= $header_name . ":" . $header . $this->headerSeparator;

            }
        }

        $sign_string .= $this->path;
        return $this->hMacSha1($sign_string, Aliyun::getAccessSecret());
    }
}