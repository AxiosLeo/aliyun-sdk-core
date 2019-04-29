<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-14 15:22
 */

namespace aliyun\sdk\core\credentials;

use aliyun\sdk\core\lib\RpcRequest;

interface CredentialsInterface
{
    public function init(RpcRequest &$request): void;
}