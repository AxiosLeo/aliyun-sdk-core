<?php

namespace aliyun\sdk\core\exception;

use Throwable;

class DomainNotExistException extends \RuntimeException
{
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}
