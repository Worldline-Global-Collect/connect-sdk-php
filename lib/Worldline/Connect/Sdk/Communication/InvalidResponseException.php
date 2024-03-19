<?php
namespace Worldline\Connect\Sdk\Communication;

use RuntimeException;

/**
 * Class InvalidResponseException
 *
 * @package Worldline\Connect\Sdk\Communication
 */
class InvalidResponseException extends RuntimeException
{
    /**
     * @var ConnectionResponse
     */
    private $response;

    /**
     * @param ConnectionResponse $response
     * @param string $message
     */
    public function __construct(ConnectionResponse $response, $message = null)
    {
        if (is_null($message)) {
            $message = 'The server returned an invalid response.';
        }
        parent::__construct($message);
        $this->response = $response;
    }

    /**
     * @return ConnectionResponse
     */
    public function getResponse()
    {
        return $this->response;
    }
}
