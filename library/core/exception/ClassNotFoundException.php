<?php

namespace aliyun\sdk\core\exception;

class ClassNotFoundException extends \RuntimeException
{
    protected $class;

    public function __construct($message, $class = '')
    {
        $this->message = $message;
        $this->class   = $class;

        parent::__construct();
    }

    /**
     * 获取类名
     *
     * @access public
     * @return string
     */
    public function getClass()
    {
        return $this->class;
    }
}
