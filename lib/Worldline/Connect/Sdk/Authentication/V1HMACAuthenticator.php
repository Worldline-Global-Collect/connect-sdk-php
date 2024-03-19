<?php
namespace Worldline\Connect\Sdk\Authentication;

use Worldline\Connect\Sdk\CommunicatorConfiguration;

/**
 * Class V1HMACAuthenticator
 *
 * @package Worldline\Connect\Sdk\Authentication
 */
class V1HMACAuthenticator implements Authenticator
{
    /** @var string */
    private $apiKeyId;

    /** @var string */
    private $apiSecret;

    /**
     * @param CommunicatorConfiguration $communicatorConfiguration
     */
    public function __construct(CommunicatorConfiguration $communicatorConfiguration)
    {
        $this->apiKeyId = $communicatorConfiguration->getApiKeyId();
        $this->apiSecret = $communicatorConfiguration->getApiSecret();
    }

    /**
     * @param string $httpMethod
     * @param string $uriPath
     * @param string[] $requestHeaders
     * @return string
     */
    public function getAuthorization($httpMethod, $uriPath, $requestHeaders)
    {
        $signature = base64_encode(
            hash_hmac(
                'sha256',
                $this->getSignData($httpMethod, $uriPath, $requestHeaders),
                $this->apiSecret,
                true
            )
        );
        return sprintf('GCS v1HMAC:%s:%s', $this->apiKeyId, $signature);
    }

    /**
     * @param string[] $requestHeaders
     * @return string
     */
    private function getSignData($httpMethod, $uriPath, $requestHeaders)
    {
        $signData = $httpMethod . "\n";
        if (isset($requestHeaders['Content-Type'])) {
            $signData .= $requestHeaders['Content-Type'] . "\n";
        } else {
            $signData .= "\n";
        }
        if (isset($requestHeaders['Date'])) {
            $signData .= $requestHeaders['Date'] . "\n";
        } else {
            $signData .= "\n";
        }
        $gcsHeaders = array();
        foreach ($requestHeaders as $headerKey => $headerValue) {
            if (preg_match('/X-GCS/i', $headerKey)) {
                $gcsHeaders[$headerKey] = $headerValue;
            }
        }
        ksort($gcsHeaders);
        foreach ($gcsHeaders as $gcsHeaderKey => $gcsHeaderValue) {
            $gcsEncodedHeaderValue = trim(preg_replace('/\r?\n[\h]*/', ' ', $gcsHeaderValue));

            $signData .= strtolower($gcsHeaderKey) . ':' . $gcsEncodedHeaderValue . "\n";
        }
        $signData .= $uriPath . "\n";
        return $signData;
    }
}
