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
class Frequency extends DataObject
{
    /**
     * @var string
     */
    public $interval = null;

    /**
     * @var int
     */
    public $intervalFrequency = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->interval)) {
            $object->interval = $this->interval;
        }
        if (!is_null($this->intervalFrequency)) {
            $object->intervalFrequency = $this->intervalFrequency;
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
        if (property_exists($object, 'interval')) {
            $this->interval = $object->interval;
        }
        if (property_exists($object, 'intervalFrequency')) {
            $this->intervalFrequency = $object->intervalFrequency;
        }
        return $this;
    }
}
