<?php
namespace Worldline\Connect\Sdk\Communication;

use RuntimeException;
use Worldline\Connect\Sdk\Domain\DataObject;

/**
 * Class ErrorResponseException
 *
 * @package Worldline\Connect\Sdk\Communication
 */
class ErrorResponseException extends RuntimeException
{
    /** @var int */
    private $httpStatusCode;

    /**
     * @var DataObject
     */
    private $errorResponse;

    /**
     * @param int $httpStatusCode
     * @param DataObject $errorResponse
     * @param string $message
     */
    public function __construct($httpStatusCode, DataObject $errorResponse, $message = null)
    {
        if (is_null($message)) {
            $message = 'The server returned an error.';
        }
        parent::__construct($message);
        $this->httpStatusCode = $httpStatusCode;
        $this->errorResponse = $errorResponse;
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
    public function getErrorResponse()
    {
        return $this->errorResponse;
    }
}
