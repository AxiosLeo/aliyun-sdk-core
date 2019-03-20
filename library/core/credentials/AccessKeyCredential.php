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
use aliyun\sdk\core\sign\HmacSHA1;
use api\tool\lib\ArrayTool;

class AccessKeyCredential extends CredentialsAbstract
{
    /**
     * @var ArrayTool
     */
    public $params;

    /**
     * @var ArrayTool
     */
    public $headers;

    /**
     * @var ArrayTool
     */
    public $options;

    public function init(Request $request): void
    {
        $this->params  = $request->params;
        $this->headers = $request->headers;
        $this->options = $request->options;
        $this->params->set("Action", $request->action);
        $this->params->set('Format', strtoupper($request->format));
        $this->params->set('Version', $request->version);
        $this->params->set('AccessKeyId', Aliyun::getAccessKeyId());
        $this->params->set('SignatureMethod', "HMAC-SHA1");
        $this->params->set("SignatureVersion", "1.0");
        $this->params->set("Timestamp", gmdate("Y-m-d\TH:i:s\Z"));
        $this->params->set("SignatureNonce", SignatureNonce::get("SignatureNonce"));

        $HmacSHA1  = new HmacSHA1();
        $signature = $HmacSHA1->setParams($this->params->get())->setMethod($request->method())->getSign();
        $this->params->set("Signature", $signature);
    }

    public function headers(): array
    {
        return $this->headers->get();
    }

    public function params(): array
    {
        return $this->params->get();
    }

    public function guzzleHttpOptions()
    {
        return $this->options->get();
    }
}