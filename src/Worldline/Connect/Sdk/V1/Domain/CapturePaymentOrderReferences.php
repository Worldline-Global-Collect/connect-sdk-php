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
class CapturePaymentOrderReferences extends DataObject
{
    /**
     * @var string
     */
    public $merchantCaptureReference = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->merchantCaptureReference)) {
            $object->merchantCaptureReference = $this->merchantCaptureReference;
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
        if (property_exists($object, 'merchantCaptureReference')) {
            $this->merchantCaptureReference = $object->merchantCaptureReference;
        }
        return $this;
    }
}
