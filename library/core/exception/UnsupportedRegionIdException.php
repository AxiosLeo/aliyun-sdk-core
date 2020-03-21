<?php

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
        $endpoints_list = "";
        if (isset($endpoints["regions"])) {
            $endpoints_list = implode(",", $endpoints["regions"]);
        }
        if (empty($endpoints_list)) {
            $message .= " (" . $product . ") List of Supported RegionId : " . $endpoints_list . ".\n";
        } else {
            $message .= " (" . $product . ") List of Supported RegionId : " . $endpoints_list . ".\n";
        }
        $code     = 400;
        $previous = null;
        parent::__construct($message, $code, $previous);
    }
}
