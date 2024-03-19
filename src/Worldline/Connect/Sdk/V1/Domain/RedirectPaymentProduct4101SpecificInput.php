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
class RedirectPaymentProduct4101SpecificInput extends DataObject
{
    /**
     * @var string
     */
    public $displayName = null;

    /**
     * @var string
     */
    public $integrationType = null;

    /**
     * @var string
     */
    public $virtualPaymentAddress = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->displayName)) {
            $object->displayName = $this->displayName;
        }
        if (!is_null($this->integrationType)) {
            $object->integrationType = $this->integrationType;
        }
        if (!is_null($this->virtualPaymentAddress)) {
            $object->virtualPaymentAddress = $this->virtualPaymentAddress;
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
        if (property_exists($object, 'displayName')) {
            $this->displayName = $object->displayName;
        }
        if (property_exists($object, 'integrationType')) {
            $this->integrationType = $object->integrationType;
        }
        if (property_exists($object, 'virtualPaymentAddress')) {
            $this->virtualPaymentAddress = $object->virtualPaymentAddress;
        }
        return $this;
    }
}
