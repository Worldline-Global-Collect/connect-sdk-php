<?php
namespace Worldline\Connect\Sdk;

class ClientTestCase extends TestCase
{
    /**
     * @var Client|null
     */
    protected $client = null;

    /**
     * @var Client|null
     */
    protected $proxyClient = null;

    /**
     * @return Client
     */
    protected function getClient()
    {
        if (is_null($this->client)) {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicator = new Communicator($communicatorConfiguration);
            $this->client = new Client($communicator);
        }
        return $this->client;
    }

    /**
     * @return Client
     */
    protected function getProxyClient()
    {
        if (is_null($this->proxyClient)) {
            $communicatorConfiguration = $this->getCommunicatorConfiguration();
            $communicatorConfiguration->setProxyConfiguration(new ProxyConfiguration(
                $this->getProxyHost(),
                $this->getProxyPort(),
                $this->getProxyUsername(),
                $this->getProxyPassword()
            ));
            $communicator = new Communicator($communicatorConfiguration);
            $this->proxyClient = new Client($communicator);
        }
        return $this->proxyClient;
    }
}
