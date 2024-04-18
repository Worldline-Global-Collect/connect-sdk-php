<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk;

use Worldline\Connect\Sdk\Logging\CommunicatorLogger;
use Worldline\Connect\Sdk\V1\V1Client;

/**
 * Worldline Global Collect platform client.
 */
class Client extends ApiResource
{
    /** @var Communicator */
    private $communicator;

    /** @var string */
    private $clientMetaInfo;

    /**
     * Construct a new Worldline Global Collect platform API client.
     *
     * @param Communicator $communicator
     * @param string $clientMetaInfo
     *
     */
    public function __construct(Communicator $communicator, $clientMetaInfo = '')
    {
        parent::__construct();
        $this->communicator = $communicator;
        $this->setClientMetaInfo($clientMetaInfo);
        $this->context = array();
    }

    /**
     * @return Communicator
     */
    protected function getCommunicator()
    {
        return $this->communicator;
    }

    /**
     * @param CommunicatorLogger $communicatorLogger
     */
    public function enableLogging(CommunicatorLogger $communicatorLogger)
    {
        $this->getCommunicator()->enableLogging($communicatorLogger);
    }

    /**
     *
     */
    public function disableLogging()
    {
        $this->getCommunicator()->disableLogging();
    }

    /**
     * @param string $clientMetaInfo
     * @return $this
     */
    public function setClientMetaInfo($clientMetaInfo)
    {
        $this->clientMetaInfo = $clientMetaInfo ? base64_encode($clientMetaInfo) : '';
        return $this;
    }

    /**
     * @return string
     */
    protected function getClientMetaInfo()
    {
        return $this->clientMetaInfo;
    }

    public function v1()
    {
        return new V1Client($this, $this->context);
    }
}
