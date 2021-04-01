<?php

namespace aliyun\sdk\core\lib;

class Client implements ClientInterface
{
    /**
     * @var ProductInterface
     */
    protected $product;

    /**
     * @var Request[]
     */
    protected $instance;

    public function __call($action, $arguments)
    {
        switch ($this->product->sdk_type()) {
            case 'roa':
                $request = new RoaRequest();

                break;

            default:
                $request = new RpcRequest();
        }
        $request->product($this->product->productId());
        $request->version($this->product->versionDate());
        $request->action($action);
        $request->endpoints($this->product->endpoints());
        $request->credential($this->product->credential());
        $request->serviceCode($this->product->serviceCode());
        $request->protocol($this->product->protocol());

        return $request;
    }

    public function init(ProductInterface $product)
    {
        $this->product = $product;
    }
}
