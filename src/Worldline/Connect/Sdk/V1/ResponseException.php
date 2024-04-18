<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1;

use RuntimeException;
use Worldline\Connect\Sdk\Domain\DataObject;
use Worldline\Connect\Sdk\V1\Domain\APIError;

/**
 * Class ResponseException
 *
 * @package Worldline\Connect\Sdk\V1
 */
class ResponseException extends RuntimeException
{
    /** @var int */
    private $httpStatusCode;

    /**
     * @var DataObject
     */
    private $response;

    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string $message
     */
    public function __construct($httpStatusCode, DataObject $response, $message = null)
    {
        if (is_null($message)) {
            $message = 'the Worldline Global Collect platform returned an error response';
        }
        parent::__construct($message);
        $this->httpStatusCode = $httpStatusCode;
        $this->response = $response;
    }

    public function __toString()
    {
        return sprintf(
            "exception '%s' with message '%s'. in %s:%d\nHTTP status code: %s\nResponse:\n%s\nStack trace:\n%s",
            __CLASS__,
            $this->getMessage(),
            $this->getFile(),
            $this->getLine(),
            $this->getHttpStatusCode(),
            json_encode($this->getResponse(), JSON_PRETTY_PRINT),
            $this->getTraceAsString()
        );
    }

    /**
     * @return int
     */
    public function getHttpStatusCode()
    {
        return $this->httpStatusCode;
    }

    /**
     * @return DataObject
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @return string
     */
    public function getErrorId()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('errorId', $responseVariables)) {
            return '';
        }
        return $responseVariables['errorId'];
    }

    /**
     * @return APIError[]
     */
    public function getErrors()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('errors', $responseVariables)) {
            return array();
        }
        $errors = $responseVariables['errors'];
        if (!is_array($errors)) {
            return array();
        }
        foreach ($errors as $e) {
            if (!($e instanceof APIError)) {
                return array();
            }
        }
        return $errors;
    }
}
