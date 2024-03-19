<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1\Domain;

use UnexpectedValueException;
use Worldline\Connect\Sdk\Domain\DataObject;

/**
 * @package Worldline\Connect\Sdk\V1\Domain
 */
class ShippingRiskAssessment extends DataObject
{
    /**
     * @var AddressPersonal
     */
    public $address = null;

    /**
     * @var string
     */
    public $comments = null;

    /**
     * @var string
     */
    public $trackingNumber = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->address)) {
            $object->address = $this->address->toObject();
        }
        if (!is_null($this->comments)) {
            $object->comments = $this->comments;
        }
        if (!is_null($this->trackingNumber)) {
            $object->trackingNumber = $this->trackingNumber;
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
        if (property_exists($object, 'address')) {
            if (!is_object($object->address)) {
                throw new UnexpectedValueException('value \'' . print_r($object->address, true) . '\' is not an object');
            }
            $value = new AddressPersonal();
            $this->address = $value->fromObject($object->address);
        }
        if (property_exists($object, 'comments')) {
            $this->comments = $object->comments;
        }
        if (property_exists($object, 'trackingNumber')) {
            $this->trackingNumber = $object->trackingNumber;
        }
        return $this;
    }
}
