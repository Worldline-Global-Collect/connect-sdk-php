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
class CybersourceDecisionManager extends DataObject
{
    /**
     * @var string
     */
    public $clauseName = null;

    /**
     * @var int
     */
    public $fraudScore = null;

    /**
     * @var string
     */
    public $policyApplied = null;

    /**
     * @var string[]
     */
    public $reasonCodes = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->clauseName)) {
            $object->clauseName = $this->clauseName;
        }
        if (!is_null($this->fraudScore)) {
            $object->fraudScore = $this->fraudScore;
        }
        if (!is_null($this->policyApplied)) {
            $object->policyApplied = $this->policyApplied;
        }
        if (!is_null($this->reasonCodes)) {
            $object->reasonCodes = [];
            foreach ($this->reasonCodes as $element) {
                if (!is_null($element)) {
                    $object->reasonCodes[] = $element;
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
        if (property_exists($object, 'clauseName')) {
            $this->clauseName = $object->clauseName;
        }
        if (property_exists($object, 'fraudScore')) {
            $this->fraudScore = $object->fraudScore;
        }
        if (property_exists($object, 'policyApplied')) {
            $this->policyApplied = $object->policyApplied;
        }
        if (property_exists($object, 'reasonCodes')) {
            if (!is_array($object->reasonCodes) && !is_object($object->reasonCodes)) {
                throw new UnexpectedValueException('value \'' . print_r($object->reasonCodes, true) . '\' is not an array or object');
            }
            $this->reasonCodes = [];
            foreach ($object->reasonCodes as $element) {
                $this->reasonCodes[] = $element;
            }
        }
        return $this;
    }
}
