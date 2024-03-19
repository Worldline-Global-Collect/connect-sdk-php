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
class AbstractRedirectPaymentProduct840SpecificInput extends DataObject
{
    /**
     * @var bool
     */
    public $addressSelectionAtPayPal = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->addressSelectionAtPayPal)) {
            $object->addressSelectionAtPayPal = $this->addressSelectionAtPayPal;
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
        if (property_exists($object, 'addressSelectionAtPayPal')) {
            $this->addressSelectionAtPayPal = $object->addressSelectionAtPayPal;
        }
        return $this;
    }
}
