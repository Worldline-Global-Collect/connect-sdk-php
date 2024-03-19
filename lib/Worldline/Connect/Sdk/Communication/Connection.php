<?php
namespace Worldline\Connect\Sdk\Communication;

use Worldline\Connect\Sdk\Logging\CommunicatorLogger;

/**
 * Class Connection
 *
 * @package Worldline\Connect\Sdk\Communication
 */
interface Connection
{
    /**
     * @param string $requestUri
     * @param string[] $requestHeaders
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    public function get($requestUri, $requestHeaders, callable $responseHandler);

    /**
     * @param string $requestUri
     * @param string[] $requestHeaders
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    public function delete($requestUri, $requestHeaders, callable $responseHandler);

    /**
     * @param string $requestUri
     * @param string[] $requestHeaders
     * @param string|MultipartFormDataObject $body
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    public function post($requestUri, $requestHeaders, $body, callable $responseHandler);

    /**
     * @param string $requestUri
     * @param string[] $requestHeaders
     * @param string|MultipartFormDataObject $body
     * @param callable $responseHandler Callable accepting the response status code, a response body chunk and the response headers
     */
    public function put($requestUri, $requestHeaders, $body, callable $responseHandler);

    /**
     * @param CommunicatorLogger $communicatorLogger
     */
    public function enableLogging(CommunicatorLogger $communicatorLogger);

    /**
     *
     */
    public function disableLogging();
}
