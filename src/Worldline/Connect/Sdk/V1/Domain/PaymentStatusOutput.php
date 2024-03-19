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
class PaymentStatusOutput extends OrderStatusOutput
{
    /**
     * @var bool
     */
    public $isAuthorized = null;

    /**
     * @var bool
     */
    public $isRefundable = null;

    /**
     * @var string
     */
    public $threeDSecureStatus = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->isAuthorized)) {
            $object->isAuthorized = $this->isAuthorized;
        }
        if (!is_null($this->isRefundable)) {
            $object->isRefundable = $this->isRefundable;
        }
        if (!is_null($this->threeDSecureStatus)) {
            $object->threeDSecureStatus = $this->threeDSecureStatus;
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
        if (property_exists($object, 'isAuthorized')) {
            $this->isAuthorized = $object->isAuthorized;
        }
        if (property_exists($object, 'isRefundable')) {
            $this->isRefundable = $object->isRefundable;
        }
        if (property_exists($object, 'threeDSecureStatus')) {
            $this->threeDSecureStatus = $object->threeDSecureStatus;
        }
        return $this;
    }
}
