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
class LineItem extends DataObject
{
    /**
     * @var AmountOfMoney
     */
    public $amountOfMoney = null;

    /**
     * @var LineItemInvoiceData
     */
    public $invoiceData = null;

    /**
     * @var LineItemLevel3InterchangeInformation
     * @deprecated Use orderLineDetails instead
     */
    public $level3InterchangeInformation = null;

    /**
     * @var OrderLineDetails
     */
    public $orderLineDetails = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->amountOfMoney)) {
            $object->amountOfMoney = $this->amountOfMoney->toObject();
        }
        if (!is_null($this->invoiceData)) {
            $object->invoiceData = $this->invoiceData->toObject();
        }
        if (!is_null($this->level3InterchangeInformation)) {
            $object->level3InterchangeInformation = $this->level3InterchangeInformation->toObject();
        }
        if (!is_null($this->orderLineDetails)) {
            $object->orderLineDetails = $this->orderLineDetails->toObject();
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
        if (property_exists($object, 'amountOfMoney')) {
            if (!is_object($object->amountOfMoney)) {
                throw new UnexpectedValueException('value \'' . print_r($object->amountOfMoney, true) . '\' is not an object');
            }
            $value = new AmountOfMoney();
            $this->amountOfMoney = $value->fromObject($object->amountOfMoney);
        }
        if (property_exists($object, 'invoiceData')) {
            if (!is_object($object->invoiceData)) {
                throw new UnexpectedValueException('value \'' . print_r($object->invoiceData, true) . '\' is not an object');
            }
            $value = new LineItemInvoiceData();
            $this->invoiceData = $value->fromObject($object->invoiceData);
        }
        if (property_exists($object, 'level3InterchangeInformation')) {
            if (!is_object($object->level3InterchangeInformation)) {
                throw new UnexpectedValueException('value \'' . print_r($object->level3InterchangeInformation, true) . '\' is not an object');
            }
            $value = new LineItemLevel3InterchangeInformation();
            $this->level3InterchangeInformation = $value->fromObject($object->level3InterchangeInformation);
        }
        if (property_exists($object, 'orderLineDetails')) {
            if (!is_object($object->orderLineDetails)) {
                throw new UnexpectedValueException('value \'' . print_r($object->orderLineDetails, true) . '\' is not an object');
            }
            $value = new OrderLineDetails();
            $this->orderLineDetails = $value->fromObject($object->orderLineDetails);
        }
        return $this;
    }
}
