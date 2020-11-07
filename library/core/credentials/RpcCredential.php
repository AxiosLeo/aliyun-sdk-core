<?php

namespace aliyun\sdk\core\credentials;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\help\SignatureNonce;
use aliyun\sdk\core\lib\Request;
use aliyun\sdk\core\sign\RpcSignature;
use Mimey\MimeTypes;

class RpcCredential extends CredentialsAbstract
{
    public function init(Request &$request): void
    {
        if (empty($request->domain())) {
            $request->domain($this->setDomain($request));
        }

        $request->params('Action', $request->action());
        $request->params('Format', 'JSON');
        $request->params('Version', $request->version());
        $request->params('AccessKeyId', Aliyun::getAccessKeyId());
        $request->params('Timestamp', gmdate('Y-m-d\\TH:i:s\\Z'));
        $request->params('SignatureNonce', SignatureNonce::get(Aliyun::getAccessKeyId() . 'SignatureNonce'));
        $mimes = new MimeTypes();
        $request->headers('Accept', $mimes->getMimeType(strtolower($request->format())));

        if (!empty(Aliyun::getSecurityToken())) {
            $request->params('SecurityToken', Aliyun::getSecurityToken());
        }

        $DefaultSignature = new RpcSignature();
        $DefaultSignature->setSignMethod($request->params('SignatureMethod'));
        $request->params('Signature', $DefaultSignature->setParams($request->params())
            ->setMethod($request->method())
            ->getSign());
    }
}
