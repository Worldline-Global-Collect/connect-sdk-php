<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1;

use Worldline\Connect\Sdk\Domain\DataObject;

/**
 * Class IdempotenceException
 *
 * @package Worldline\Connect\Sdk\V1
 */
class IdempotenceException extends ResponseException
{
    /** @var string */
    private $idempotenceKey;

    /** @var string */
    private $idempotenceRequestTimestamp;

    /**
     * @param int $httpStatusCode
     * @param DataObject $response
     * @param string $message
     * @param string $idempotenceKey
     * @param string $idempotenceRequestTimestamp;
     */
    public function __construct(
        $httpStatusCode,
        DataObject $response,
        $message = null,
        $idempotenceKey = '',
        $idempotenceRequestTimestamp = ''
    ) {
        parent::__construct($httpStatusCode, $response, $message);
        $this->idempotenceKey = $idempotenceKey;
        $this->idempotenceRequestTimestamp = $idempotenceRequestTimestamp;
    }

    /**
     * @return string
     */
    public function getIdempotenceKey()
    {
        return $this->idempotenceKey;
    }

    /**
     * @return string
     */
    public function getIdempotenceRequestTimestamp()
    {
        return $this->idempotenceRequestTimestamp;
    }
}
