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
 * @deprecated No replacement
 */
class FraudFieldsShippingDetails extends DataObject
{
    /**
     * @var string
     * @deprecated No replacement
     */
    public $methodDetails = null;

    /**
     * @var int
     * @deprecated No replacement
     */
    public $methodSpeed = null;

    /**
     * @var int
     * @deprecated No replacement
     */
    public $methodType = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->methodDetails)) {
            $object->methodDetails = $this->methodDetails;
        }
        if (!is_null($this->methodSpeed)) {
            $object->methodSpeed = $this->methodSpeed;
        }
        if (!is_null($this->methodType)) {
            $object->methodType = $this->methodType;
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
        if (property_exists($object, 'methodDetails')) {
            $this->methodDetails = $object->methodDetails;
        }
        if (property_exists($object, 'methodSpeed')) {
            $this->methodSpeed = $object->methodSpeed;
        }
        if (property_exists($object, 'methodType')) {
            $this->methodType = $object->methodType;
        }
        return $this;
    }
}