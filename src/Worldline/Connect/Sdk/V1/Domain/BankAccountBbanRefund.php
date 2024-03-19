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
class BankAccountBbanRefund extends BankAccountBban
{
    /**
     * @var string
     */
    public $bankCity = null;

    /**
     * @var string
     */
    public $patronymicName = null;

    /**
     * @var string
     */
    public $swiftCode = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->bankCity)) {
            $object->bankCity = $this->bankCity;
        }
        if (!is_null($this->patronymicName)) {
            $object->patronymicName = $this->patronymicName;
        }
        if (!is_null($this->swiftCode)) {
            $object->swiftCode = $this->swiftCode;
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
        if (property_exists($object, 'bankCity')) {
            $this->bankCity = $object->bankCity;
        }
        if (property_exists($object, 'patronymicName')) {
            $this->patronymicName = $object->patronymicName;
        }
        if (property_exists($object, 'swiftCode')) {
            $this->swiftCode = $object->swiftCode;
        }
        return $this;
    }
}
