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
     * @var Action[]
     */
    protected $instance;

    public function __call($action, $arguments)
    {
        if (is_null($this->instance)) {
            $this->instance[$action] = new Action(
                $this->product->productId(),
                $this->product->endpoints(),
                $this->product->versionDate(),
                $action,
                $this->product->serviceCode()
            );
        }
        return $this->instance[$action];
    }

    public function init(ProductInterface $product)
    {
        $this->product = $product;
    }
}