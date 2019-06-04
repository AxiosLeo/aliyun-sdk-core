<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-05-24 14:10
 */

namespace aliyun\sdk\core\lib;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\help\SignatureNonce;

class RoaRequest extends Request
{
    public function __construct()
    {
        $this->region = Aliyun::region();
        $this->params("region-id", Aliyun::region());
        $this->params("signature-method", "HMAC-SHA1");
        $this->params("signature-nonce", SignatureNonce::get("SignatureNonce"));
        $this->params("signature-version", "1.0");
        $this->params("version", $this->version());
        dump($this->params());die();
    }
}