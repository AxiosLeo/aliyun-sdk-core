<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-03-14 15:22
 */

namespace aliyun\sdk\core\credentials;

use aliyun\sdk\core\lib\Request;

interface CredentialsInterface
{
    public function init(Request $request): void;

    public function headers(): array;

    public function params(): array;

    public function guzzleHttpOptions();
}