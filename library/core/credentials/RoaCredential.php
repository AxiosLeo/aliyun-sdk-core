<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-05-22 13:45
 */

namespace aliyun\sdk\core\credentials;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\exception\UnsupportedRegionIdException;
use aliyun\sdk\core\lib\Request;
use aliyun\sdk\core\sign\RoaSignature;

class RoaCredential extends CredentialsAbstract
{
    private $dateTimeFormat = "D, d M Y H:i:s \G\M\T";

    public function init(Request &$request): void
    {
        $header_prefix = "x-" . strtolower($request->product()) . "-";
        if (empty($request->domain())) {
            $request->domain($this->setDomain($request));
        }

        $request->headers("Date", gmdate($this->dateTimeFormat));
        $format = [
            "json" => "application/json",
            "xml"  => "application/xml"
        ];
        $request->headers("Accept", $format[$request->format()]);
        if (empty($request->headers("Content-Type"))) {
            $request->headers("Content-Type", $request->headers("Accept") . "; charset=utf-8");
        }

        if (empty($request->region())) {
            throw new UnsupportedRegionIdException($request->product(), $request->region(), $request->endpoints());
        }

        foreach ($request->params() as $key => $value) {
            $request->headers($header_prefix . $key, $value);
        }
        $request->params = [];

        $RoaSignature = new RoaSignature();
        $signature    = $RoaSignature->setHeaders($request->headers())
            ->setProduct($request->product())
            ->setMethod($request->method())
            ->setPath($request->curlPath())
            ->getSign();

        $request->headers("Authorization", strtolower($request->product()) . " " . Aliyun::getAccessKeyId() . ":" . $signature);
    }
}