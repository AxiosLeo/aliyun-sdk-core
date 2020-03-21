<?php

namespace aliyun\sdk\core\credentials;

use aliyun\sdk\Aliyun;
use aliyun\sdk\core\exception\UnsupportedRegionIdException;
use aliyun\sdk\core\help\SignatureNonce;
use aliyun\sdk\core\lib\Request;
use aliyun\sdk\core\sign\RoaSignature;
use Mimey\MimeTypes;

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

        $mimes = new MimeTypes;
        $request->headers("Accept", $mimes->getMimeType(strtolower($request->format())));
        if (empty($request->headers("Content-Type"))) {
            $request->headers("Content-Type", $request->headers("Accept") . "; charset=utf-8");
        }

        if (empty($request->region())) {
            throw new UnsupportedRegionIdException($request->product(), $request->region(), $request->endpoints());
        }

        $request->params("signature-nonce", SignatureNonce::get(Aliyun::getAccessKeyId() . "SignatureNonce"));

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
