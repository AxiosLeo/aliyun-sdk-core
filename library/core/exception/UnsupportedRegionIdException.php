<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-04-14 18:56
 */

namespace aliyun\sdk\core\exception;

use aliyun\sdk\core\lib\Endpoints;

class UnsupportedRegionIdException extends \RuntimeException
{
    protected $endpoints;

    protected $region_id;

    protected $product;

    public function __construct($product, $region_id)
    {
        if (empty($region_id)) {
            $message = "RegionId cannot be empty ! please fixed error with this code : Aliyun::region(<region_id>; ";
        } else {
            $message = "Unsupported RegionId:" . $region_id . " ; ";
        }
        $message  .= " The List of Supported RegionId is : " . Endpoints::getSupportedRegionIdList($product);
        $code     = 400;
        $previous = null;
        parent::__construct($message, $code, $previous);
    }
}