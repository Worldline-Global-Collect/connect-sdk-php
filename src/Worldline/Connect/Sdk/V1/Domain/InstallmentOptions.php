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
class InstallmentOptions extends DataObject
{
    /**
     * @var InstallmentDisplayHints
     */
    public $displayHints = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var Installments[]
     */
    public $installmentPlans = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->displayHints)) {
            $object->displayHints = $this->displayHints->toObject();
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->installmentPlans)) {
            $object->installmentPlans = [];
            foreach ($this->installmentPlans as $element) {
                if (!is_null($element)) {
                    $object->installmentPlans[] = $element->toObject();
                }
            }
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
        if (property_exists($object, 'displayHints')) {
            if (!is_object($object->displayHints)) {
                throw new UnexpectedValueException('value \'' . print_r($object->displayHints, true) . '\' is not an object');
            }
            $value = new InstallmentDisplayHints();
            $this->displayHints = $value->fromObject($object->displayHints);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'installmentPlans')) {
            if (!is_array($object->installmentPlans) && !is_object($object->installmentPlans)) {
                throw new UnexpectedValueException('value \'' . print_r($object->installmentPlans, true) . '\' is not an array or object');
            }
            $this->installmentPlans = [];
            foreach ($object->installmentPlans as $element) {
                $value = new Installments();
                $this->installmentPlans[] = $value->fromObject($element);
            }
        }
        return $this;
    }
}
