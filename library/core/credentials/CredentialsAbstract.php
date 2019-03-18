<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-14 15:21
 */

namespace aliyun\sdk\core\credentials;

use aliyun\sdk\core\lib\Request;

abstract class CredentialsAbstract implements CredentialsInterface
{
    abstract public function init(Request $request): void;

    abstract public function headers(): array;

    abstract public function params(): array;

    abstract public function guzzleHttpOptions(): array;
}