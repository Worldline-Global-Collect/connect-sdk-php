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
class LengthValidator extends DataObject
{
    /**
     * @var int
     */
    public $maxLength = null;

    /**
     * @var int
     */
    public $minLength = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->maxLength)) {
            $object->maxLength = $this->maxLength;
        }
        if (!is_null($this->minLength)) {
            $object->minLength = $this->minLength;
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
        if (property_exists($object, 'maxLength')) {
            $this->maxLength = $object->maxLength;
        }
        if (property_exists($object, 'minLength')) {
            $this->minLength = $object->minLength;
        }
        return $this;
    }
}
