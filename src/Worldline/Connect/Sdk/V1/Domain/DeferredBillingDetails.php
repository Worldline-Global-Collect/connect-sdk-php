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
class DeferredBillingDetails extends BaseBillingDetails
{
    /**
     * @var int
     */
    public $deferredPaymentAmount = null;

    /**
     * @var string
     */
    public $deferredPaymentDate = null;

    /**
     * @var string
     */
    public $freeCancellationDate = null;

    /**
     * @var string
     */
    public $freeCancellationDateTimeZone = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->deferredPaymentAmount)) {
            $object->deferredPaymentAmount = $this->deferredPaymentAmount;
        }
        if (!is_null($this->deferredPaymentDate)) {
            $object->deferredPaymentDate = $this->deferredPaymentDate;
        }
        if (!is_null($this->freeCancellationDate)) {
            $object->freeCancellationDate = $this->freeCancellationDate;
        }
        if (!is_null($this->freeCancellationDateTimeZone)) {
            $object->freeCancellationDateTimeZone = $this->freeCancellationDateTimeZone;
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
        if (property_exists($object, 'deferredPaymentAmount')) {
            $this->deferredPaymentAmount = $object->deferredPaymentAmount;
        }
        if (property_exists($object, 'deferredPaymentDate')) {
            $this->deferredPaymentDate = $object->deferredPaymentDate;
        }
        if (property_exists($object, 'freeCancellationDate')) {
            $this->freeCancellationDate = $object->freeCancellationDate;
        }
        if (property_exists($object, 'freeCancellationDateTimeZone')) {
            $this->freeCancellationDateTimeZone = $object->freeCancellationDateTimeZone;
        }
        return $this;
    }
}
