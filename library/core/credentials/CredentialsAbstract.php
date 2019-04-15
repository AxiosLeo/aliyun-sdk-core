<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-04-14 18:52
 */

namespace aliyun\sdk\core\credentials;

use aliyun\sdk\core\exception\UnsupportedRegionIdException;
use aliyun\sdk\core\lib\Endpoints;
use aliyun\sdk\core\lib\Request;

abstract class CredentialsAbstract implements CredentialsInterface
{
    public function setDomain(Request &$request)
    {
        if (empty($request->domain())) {
            $endpoints = $request->endpoints();
            if (!empty($endpoints)) {
                if (isset($endpoints[$request->region()])) {
                    $request->domain($endpoints[$request->region()]);
                } else if (isset($endpoints["global"]) && count($endpoints) == 1) {
                    $request->domain($endpoints["global"]);
                } else {
                    throw new UnsupportedRegionIdException($request->product(), $request->region());
                }
            } else {
                $request->domain(Endpoints::domain($request->region(), $request->product()));
            }
        }
    }
}