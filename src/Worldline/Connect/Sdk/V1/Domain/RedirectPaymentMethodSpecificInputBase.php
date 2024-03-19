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
class RedirectPaymentMethodSpecificInputBase extends AbstractRedirectPaymentMethodSpecificInput
{
    /**
     * @var RedirectPaymentProduct4101SpecificInputBase
     */
    public $paymentProduct4101SpecificInput = null;

    /**
     * @var RedirectPaymentProduct840SpecificInputBase
     */
    public $paymentProduct840SpecificInput = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->paymentProduct4101SpecificInput)) {
            $object->paymentProduct4101SpecificInput = $this->paymentProduct4101SpecificInput->toObject();
        }
        if (!is_null($this->paymentProduct840SpecificInput)) {
            $object->paymentProduct840SpecificInput = $this->paymentProduct840SpecificInput->toObject();
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
        if (property_exists($object, 'paymentProduct4101SpecificInput')) {
            if (!is_object($object->paymentProduct4101SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct4101SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct4101SpecificInputBase();
            $this->paymentProduct4101SpecificInput = $value->fromObject($object->paymentProduct4101SpecificInput);
        }
        if (property_exists($object, 'paymentProduct840SpecificInput')) {
            if (!is_object($object->paymentProduct840SpecificInput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->paymentProduct840SpecificInput, true) . '\' is not an object');
            }
            $value = new RedirectPaymentProduct840SpecificInputBase();
            $this->paymentProduct840SpecificInput = $value->fromObject($object->paymentProduct840SpecificInput);
        }
        return $this;
    }
}
