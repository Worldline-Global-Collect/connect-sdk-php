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
class AbstractRedirectPaymentProduct838SpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $interoperabilityData = null;

    /**
     * @var string
     */
    public $interoperabilityToken = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->interoperabilityData)) {
            $object->interoperabilityData = $this->interoperabilityData;
        }
        if (!is_null($this->interoperabilityToken)) {
            $object->interoperabilityToken = $this->interoperabilityToken;
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
        if (property_exists($object, 'interoperabilityData')) {
            $this->interoperabilityData = $object->interoperabilityData;
        }
        if (property_exists($object, 'interoperabilityToken')) {
            $this->interoperabilityToken = $object->interoperabilityToken;
        }
        return $this;
    }
}
