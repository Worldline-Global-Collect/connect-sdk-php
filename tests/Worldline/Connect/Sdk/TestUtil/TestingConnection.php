<?php
namespace Worldline\Connect\Sdk\TestUtil;

use Exception;
use Worldline\Connect\Sdk\Communication\ConnectionResponse;
use Worldline\Connect\Sdk\Communication\DefaultConnection;
use Worldline\Connect\Sdk\ProxyConfiguration;

class TestingConnection extends DefaultConnection
{
    private $response;
    private $exception;

    function __construct(ConnectionResponse $response = null, Exception $exception = null)
    {
        parent::__construct();
        $this->response = $response;
        $this->exception = $exception;
    }

    protected function executeRequest(
        $httpMethod,
        $requestUri,
        $requestHeaders,
        $body,
        callable $responseHandler,
        ProxyConfiguration $proxyConfiguration = null
    )
    {
        if (!is_null($this->exception)) {
            throw $this->exception;
        } else {
            $statusCode = $this->response->getHttpStatusCode();
            $body = $this->response->getBody();
            $headers = $this->response->getHeaders();
            call_user_func($responseHandler, $statusCode, $body, $headers);
            return $this->response;
        }
    }
}
