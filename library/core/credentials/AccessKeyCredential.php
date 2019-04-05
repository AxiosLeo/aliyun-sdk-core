<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-14 15:21
 */

namespace aliyun\sdk\core\credentials;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\help\SignatureNonce;
use aliyun\sdk\core\lib\Request;
use aliyun\sdk\core\sign\DefaultSignature;

class AccessKeyCredential implements CredentialsInterface
{
    public function init(Request &$request): void
    {
        $request->params("Action", $request->action());
        $request->params('Format', strtoupper($request->format()));
        $request->params('Version', $request->version());
        $request->params('AccessKeyId', Aliyun::getAccessKeyId());
        $request->params('SignatureMethod', "HMAC-SHA1");
        $request->params("SignatureVersion", "1.0");
        $request->params("Timestamp", gmdate("Y-m-d\TH:i:s\Z"));
        $request->params("SignatureNonce", SignatureNonce::get("SignatureNonce"));

        $DefaultSignature = new DefaultSignature();
        $request->params("Signature", $DefaultSignature->setParams($request->params())
            ->setMethod($request->method())
            ->getSign());
    }
}