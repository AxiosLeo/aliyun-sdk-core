<?php
/**
 * @author  : axios
 *
 * @email   : axiosleo@foxmail.com
 * @blog    : http://hanxv.cn
 * @datetime: 2019-04-14 18:56
 */

namespace aliyun\sdk\core\exception;

class UnsupportedRegionIdException extends \RuntimeException
{
    protected $endpoints;

    protected $region_id;

    protected $product;

    public function __construct($product, $region_id, $endpoints)
    {
        if (empty($region_id)) {
            $message = "RegionId cannot be empty ! please fixed error with this code : Aliyun::region(<region_id>; ";
        } else {
            $message = "Unsupported RegionId:" . $region_id . " ; ";
        }
        $message  .= " (" . $product . ") List of Supported RegionId : " . $this->getSupportedRegionIdList($endpoints) . ".\n";
        $code     = 400;
        $previous = null;
        parent::__construct($message, $code, $previous);
    }

    private function getSupportedRegionIdList($endpoints, $glue = ",")
    {
        $list = [];
        foreach ($endpoints as $region_id => $endpoint) {
            array_push($list, $region_id);
        }
        return implode($glue, $list);
    }
}