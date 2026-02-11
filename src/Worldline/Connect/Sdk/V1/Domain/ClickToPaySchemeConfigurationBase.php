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
class ClickToPaySchemeConfigurationBase extends DataObject
{
    /**
     * @var string
     */
    public $srcDpaId = null;

    /**
     * @var string
     */
    public $srcInitiatorId = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->srcDpaId)) {
            $object->srcDpaId = $this->srcDpaId;
        }
        if (!is_null($this->srcInitiatorId)) {
            $object->srcInitiatorId = $this->srcInitiatorId;
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
        if (property_exists($object, 'srcDpaId')) {
            $this->srcDpaId = $object->srcDpaId;
        }
        if (property_exists($object, 'srcInitiatorId')) {
            $this->srcInitiatorId = $object->srcInitiatorId;
        }
        return $this;
    }
}
