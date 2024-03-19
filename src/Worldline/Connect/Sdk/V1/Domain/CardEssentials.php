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
class CardEssentials extends DataObject
{
    /**
     * @var string
     */
    public $cardNumber = null;

    /**
     * @var string
     */
    public $cardholderName = null;

    /**
     * @var string
     */
    public $expiryDate = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->cardNumber)) {
            $object->cardNumber = $this->cardNumber;
        }
        if (!is_null($this->cardholderName)) {
            $object->cardholderName = $this->cardholderName;
        }
        if (!is_null($this->expiryDate)) {
            $object->expiryDate = $this->expiryDate;
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
        if (property_exists($object, 'cardNumber')) {
            $this->cardNumber = $object->cardNumber;
        }
        if (property_exists($object, 'cardholderName')) {
            $this->cardholderName = $object->cardholderName;
        }
        if (property_exists($object, 'expiryDate')) {
            $this->expiryDate = $object->expiryDate;
        }
        return $this;
    }
}
