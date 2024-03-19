<?php
namespace Worldline\Connect\Sdk\Logging;

use Exception;

/**
 * Class CommunicatorLogger
 *
 * @package Worldline\Connect\Sdk\Logging
 */
interface CommunicatorLogger
{
    /**
     * @param $message
     */
    public function log($message);

    /**
     * @param $message
     * @param Exception $exception
     */
    public function logException($message, Exception $exception);
}
