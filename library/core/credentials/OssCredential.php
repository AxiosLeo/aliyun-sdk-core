<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-04-26 22:59
 */

namespace aliyun\sdk\core\credentials;

use aliyun\sdk\core\lib\RpcRequest;

class OssCredential extends CredentialsAbstract
{
    public function init(RpcRequest &$request): void
    {
        if (empty($request->domain())) {
            $request->domain($this->setDomain($request));
        }
    }
}