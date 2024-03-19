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
class CaptureStatusOutput extends DataObject
{
    /**
     * @var bool
     */
    public $isRetriable = null;

    /**
     * @var KeyValuePair[]
     */
    public $providerRawOutput = null;

    /**
     * @var int
     */
    public $statusCode = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->isRetriable)) {
            $object->isRetriable = $this->isRetriable;
        }
        if (!is_null($this->providerRawOutput)) {
            $object->providerRawOutput = [];
            foreach ($this->providerRawOutput as $element) {
                if (!is_null($element)) {
                    $object->providerRawOutput[] = $element->toObject();
                }
            }
        }
        if (!is_null($this->statusCode)) {
            $object->statusCode = $this->statusCode;
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
        if (property_exists($object, 'isRetriable')) {
            $this->isRetriable = $object->isRetriable;
        }
        if (property_exists($object, 'providerRawOutput')) {
            if (!is_array($object->providerRawOutput) && !is_object($object->providerRawOutput)) {
                throw new UnexpectedValueException('value \'' . print_r($object->providerRawOutput, true) . '\' is not an array or object');
            }
            $this->providerRawOutput = [];
            foreach ($object->providerRawOutput as $element) {
                $value = new KeyValuePair();
                $this->providerRawOutput[] = $value->fromObject($element);
            }
        }
        if (property_exists($object, 'statusCode')) {
            $this->statusCode = $object->statusCode;
        }
        return $this;
    }
}
