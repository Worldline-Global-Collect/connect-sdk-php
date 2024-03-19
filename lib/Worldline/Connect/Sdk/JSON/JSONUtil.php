<?php
namespace Worldline\Connect\Sdk\JSON;

use stdClass;
use UnexpectedValueException;

/**
 * Class JSONUtil
 *
 * @package Worldline\Connect\Sdk
 */
class JSONUtil
{
    private function __construct()
    {
    }

    /**
     * @param string $value
     * @return stdClass
     * @throws UnexpectedValueException
     */
    public static function decode($value)
    {
        $object = json_decode($value);
        if (json_last_error()) {
            throw new UnexpectedValueException('Invalid JSON value: ' . self::getLastJsonDecodeErrorString());
        }
        return $object;
    }

    /**
     * @return string
     */
    public static function getLastJsonDecodeErrorString()
    {
        if (function_exists('json_last_error_msg')) {
            return json_last_error_msg();
        }
        switch (json_last_error()) {
            case JSON_ERROR_NONE:
                return 'No errors';
            case JSON_ERROR_DEPTH:
                return 'Maximum stack depth exceeded';
            case JSON_ERROR_STATE_MISMATCH:
                return 'Underflow or the modes mismatch';
            case JSON_ERROR_CTRL_CHAR:
                return 'Unexpected control character found';
            case JSON_ERROR_SYNTAX:
                return 'Syntax error. Malformed JSON';
            case JSON_ERROR_UTF8:
                return 'Malformed UTF-8 characters. Incorrect encoding';
            default:
                return 'Unknown error';
        }
    }
}
