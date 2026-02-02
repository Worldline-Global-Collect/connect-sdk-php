<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1\Domain;

use UnexpectedValueException;

/**
 * @package Worldline\Connect\Sdk\V1\Domain
 */
class MobilePaymentMethodSpecificOutput extends AbstractPaymentMethodSpecificOutput
{
    /**
     * @var string
     */
    public $authorisationCode = null;

    /**
     * @var CardFraudResults
     */
    public $fraudResults = null;

    /**
     * @var string
     */
    public $initialSchemeTransactionId = null;

    /**
     * @var string
     */
    public $network = null;

    /**
     * @var MobilePaymentData
     */
    public $paymentData = null;

    /**
     * @var string
     */
    public $schemeTransactionId = null;

    /**
     * @var ThreeDSecureResults
     */
    public $threeDSecureResults = null;

    /**
     * @var string
     */
    public $token = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->authorisationCode)) {
            $object->authorisationCode = $this->authorisationCode;
        }
        if (!is_null($this->fraudResults)) {
            $object->fraudResults = $this->fraudResults->toObject();
        }
        if (!is_null($this->initialSchemeTransactionId)) {
            $object->initialSchemeTransactionId = $this->initialSchemeTransactionId;
        }
        if (!is_null($this->network)) {
            $object->network = $this->network;
        }
        if (!is_null($this->paymentData)) {
            $object->paymentData = $this->paymentData->toObject();
        }
        if (!is_null($this->schemeTransactionId)) {
            $object->schemeTransactionId = $this->schemeTransactionId;
        }
        if (!is_null($this->threeDSecureResults)) {
            $object->threeDSecureResults = $this->threeDSecureResults->toObject();
        }
        if (!is_null($this->token)) {
            $object->token = $this->token;
        }
        return $object;
    }

    /**
     * @param object $object
     * @return $this
     * @throws UnexpectedValueException
     */
    public function fromObject($object)
    {
        parent::fromObject($object);
        if (property_exists($object, 'authorisationCode')) {
            $this->authorisationCode = $object->authorisationCode;
        }
        if (property_exists($object, 'fraudResults')) {
            if (!is_object($object->fraudResults)) {
                throw new UnexpectedValueException('value \'' . print_r($object->fraudResults, true) . '\' is not an object');
            }
            $value = new CardFraudResults();
            $this->fraudResults = $value->fromObject($object->fraudResults);
        }
        if (property_exists($object, 'initialSchemeTransactionId')) {
            $this->initialSchemeTransactionId = $object->initialSchemeTransactionId;
        }
        if (property_exists($object, 'network')) {
            $this->network = $object->network;
        }
        if (property_exists($object, 'paymentData')) {
            if (!is_object($object->paymentData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentData, true) . '\' is not an object');
            }
            $value = new MobilePaymentData();
            $this->paymentData = $value->fromObject($object->paymentData);
        }
        if (property_exists($object, 'schemeTransactionId')) {
            $this->schemeTransactionId = $object->schemeTransactionId;
        }
        if (property_exists($object, 'threeDSecureResults')) {
            if (!is_object($object->threeDSecureResults)) {
                throw new UnexpectedValueException('value \'' . print_r($object->threeDSecureResults, true) . '\' is not an object');
            }
            $value = new ThreeDSecureResults();
            $this->threeDSecureResults = $value->fromObject($object->threeDSecureResults);
        }
        if (property_exists($object, 'token')) {
            $this->token = $object->token;
        }
        return $this;
    }
}
