<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-04-20 19:15
 */

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
        $request = new Request();
        $request->product($this->product->productId());
        $request->version($this->product->versionDate());
        $request->action($action);
        $request->endpoints($this->product->endpoints());
        $request->credential($this->product->credential());
        $request->serviceCode($this->product->serviceCode());
        return $request;
    }

    public function init(ProductInterface $product)
    {
        $this->product = $product;
    }
}