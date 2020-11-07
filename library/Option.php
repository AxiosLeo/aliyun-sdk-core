<?php

namespace aliyun\sdk;

use axios\tools\ArrayMap;

class Option
{
    public static $option;

    public static function get($index = null, $default = null)
    {
        return self::options()->get($index, $default);
    }

    public static function set($index, $value = '')
    {
        return self::options()->set($index, $value);
    }

    public static function delete($index)
    {
        return self::options()->delete($index);
    }

    public static function list($index = '')
    {
        return self::options()->getChildKeyList($index);
    }

    public static function packagePath()
    {
        return __DIR__ . \DIRECTORY_SEPARATOR;
    }

    protected static function options()
    {
        if (null === self::$option) {
            self::$option = new ArrayMap([
                'header_accept_lang' => [
                    'zh-hans-cn' => 'zh-cn',
                ],
            ]);
        }

        return self::$option;
    }
}
