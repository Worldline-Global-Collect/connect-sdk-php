<?php
namespace Worldline\Connect\Sdk\Communication;

use Exception;
use Worldline\Connect\Sdk\Logging\BodyObfuscator;
use Worldline\Connect\Sdk\Logging\CommunicatorLogger;
use Worldline\Connect\Sdk\Logging\HeaderObfuscator;

/**
 * Class CommunicatorLoggerHelper
 *
 * @package Worldline\Connect\Sdk\Communication
 */
class CommunicatorLoggerHelper
{
    /** @var HttpObfuscator|null */
    private $httpObfuscator = null;

    /**
     * @param CommunicatorLogger $communicatorLogger
     * @param string $requestId
     * @param string $requestMethod
     * @param string $requestUri
     * @param array $requestHeaders
     * @param string $requestBody
     */
    public function logRequest(
        CommunicatorLogger $communicatorLogger,
        $requestId,
        $requestMethod,
        $requestUri,
        array $requestHeaders,
        $requestBody = ''
    ) {
        $communicatorLogger->log(sprintf(
            "Outgoing request to %s (requestId='%s')\n%s",
            $this->getEndpoint($requestUri),
            $requestId,
            $this->getHttpObfuscator()->getRawObfuscatedRequest(
                $requestMethod,
                $this->getRelativeUriPathWithRequestParameters($requestUri),
                $requestHeaders,
                $requestBody
            )
        ));
    }

    /**
     * @param CommunicatorLogger $communicatorLogger
     * @param string $requestId
     * @param string $requestUri
     * @param ConnectionResponse $response
     */
    public function logResponse(CommunicatorLogger $communicatorLogger, $requestId, $requestUri, ConnectionResponse $response)
    {
        $communicatorLogger->log(sprintf(
            "Incoming response from %s (requestId='%s')\n%s",
            $this->getEndpoint($requestUri),
            $requestId,
            $this->getHttpObfuscator()->getRawObfuscatedResponse($response)
        ));
    }

    /**
     * @param CommunicatorLogger $communicatorLogger
     * @param string $requestId
     * @param string $requestUri
     * @param Exception $exception
     */
    public function logException(CommunicatorLogger $communicatorLogger, $requestId, $requestUri, Exception $exception)
    {
        $communicatorLogger->logException(sprintf(
            "Error occurred while executing request to %s (requestId='%s')",
            $this->getEndpoint($requestUri),
            $requestId
        ), $exception);
    }

    /** @return HttpObfuscator */
    protected function getHttpObfuscator()
    {
        if (is_null($this->httpObfuscator)) {
            $this->httpObfuscator = new HttpObfuscator();
        }
        return $this->httpObfuscator;
    }

    /**
     * @param BodyObfuscator $bodyObfuscator
     */
    public function setBodyObfuscator(BodyObfuscator $bodyObfuscator)
    {
        $this->getHttpObfuscator()->setBodyObfuscator($bodyObfuscator);
    }

    /**
     * @param HeaderObfuscator $headerObfuscator
     */
    public function setHeaderObfuscator(HeaderObfuscator $headerObfuscator)
    {
        $this->getHttpObfuscator()->setHeaderObfuscator($headerObfuscator);
    }

    /**
     * @param string $requestUri
     * @return string
     */
    public function getEndpoint($requestUri)
    {
        $index = strpos($requestUri, '://');
        if ($index !== false) {
            $index = strpos($requestUri, '/', $index + 3);
            // $index === false means there's no / after the host; there is no relative URI
            return $index !== false ? substr($requestUri, 0, $index) : $requestUri;
        } else {
            // not an absolute URI
            return '';
        }
    }

    /**
     * @param string $requestUri
     * @return string
     */
    public function getRelativeUriPathWithRequestParameters($requestUri)
    {
        $index = strpos($requestUri, '://');
        if ($index !== false) {
            $index = strpos($requestUri, '/', $index + 3);
            // $index === false means there's no / after the host; there is no relative URI
            return $index !== false ? substr($requestUri, $index) : '';
        } else {
            // not an absolute URI
            return $requestUri;
        }
    }
}
