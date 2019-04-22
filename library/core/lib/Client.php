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
        if (!isset($this->instance[$action])) {
            $this->instance[$action] = new Request();
            $this->instance[$action]->product($this->product->productId());
            $this->instance[$action]->version($this->product->versionDate());
            $this->instance[$action]->action($action);
            $this->instance[$action]->endpoints($this->product->endpoints());
            $this->instance[$action]->credential($this->product->credential());
            $this->instance[$action]->serviceCode($this->product->serviceCode());
        }
        return $this->instance[$action];
    }

    public function init(ProductInterface $product)
    {
        $this->product = $product;
    }
}