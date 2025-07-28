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
class OrderLineDetails extends DataObject
{
    /**
     * @var int
     */
    public $discountAmount = null;

    /**
     * @var int
     */
    public $googleProductCategoryId = null;

    /**
     * @var int
     */
    public $lineAmountTotal = null;

    /**
     * @var string
     */
    public $naicsCommodityCode = null;

    /**
     * @var string
     */
    public $productCategory = null;

    /**
     * @var string
     */
    public $productCode = null;

    /**
     * @var string
     */
    public $productImageUrl = null;

    /**
     * @var string
     */
    public $productName = null;

    /**
     * @var int
     */
    public $productPrice = null;

    /**
     * @var string
     */
    public $productSku = null;

    /**
     * @var string
     */
    public $productType = null;

    /**
     * @var string
     */
    public $productUrl = null;

    /**
     * @var int
     */
    public $quantity = null;

    /**
     * @var int
     */
    public $taxAmount = null;

    /**
     * @var string
     */
    public $unit = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->discountAmount)) {
            $object->discountAmount = $this->discountAmount;
        }
        if (!is_null($this->googleProductCategoryId)) {
            $object->googleProductCategoryId = $this->googleProductCategoryId;
        }
        if (!is_null($this->lineAmountTotal)) {
            $object->lineAmountTotal = $this->lineAmountTotal;
        }
        if (!is_null($this->naicsCommodityCode)) {
            $object->naicsCommodityCode = $this->naicsCommodityCode;
        }
        if (!is_null($this->productCategory)) {
            $object->productCategory = $this->productCategory;
        }
        if (!is_null($this->productCode)) {
            $object->productCode = $this->productCode;
        }
        if (!is_null($this->productImageUrl)) {
            $object->productImageUrl = $this->productImageUrl;
        }
        if (!is_null($this->productName)) {
            $object->productName = $this->productName;
        }
        if (!is_null($this->productPrice)) {
            $object->productPrice = $this->productPrice;
        }
        if (!is_null($this->productSku)) {
            $object->productSku = $this->productSku;
        }
        if (!is_null($this->productType)) {
            $object->productType = $this->productType;
        }
        if (!is_null($this->productUrl)) {
            $object->productUrl = $this->productUrl;
        }
        if (!is_null($this->quantity)) {
            $object->quantity = $this->quantity;
        }
        if (!is_null($this->taxAmount)) {
            $object->taxAmount = $this->taxAmount;
        }
        if (!is_null($this->unit)) {
            $object->unit = $this->unit;
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
        if (property_exists($object, 'discountAmount')) {
            $this->discountAmount = $object->discountAmount;
        }
        if (property_exists($object, 'googleProductCategoryId')) {
            $this->googleProductCategoryId = $object->googleProductCategoryId;
        }
        if (property_exists($object, 'lineAmountTotal')) {
            $this->lineAmountTotal = $object->lineAmountTotal;
        }
        if (property_exists($object, 'naicsCommodityCode')) {
            $this->naicsCommodityCode = $object->naicsCommodityCode;
        }
        if (property_exists($object, 'productCategory')) {
            $this->productCategory = $object->productCategory;
        }
        if (property_exists($object, 'productCode')) {
            $this->productCode = $object->productCode;
        }
        if (property_exists($object, 'productImageUrl')) {
            $this->productImageUrl = $object->productImageUrl;
        }
        if (property_exists($object, 'productName')) {
            $this->productName = $object->productName;
        }
        if (property_exists($object, 'productPrice')) {
            $this->productPrice = $object->productPrice;
        }
        if (property_exists($object, 'productSku')) {
            $this->productSku = $object->productSku;
        }
        if (property_exists($object, 'productType')) {
            $this->productType = $object->productType;
        }
        if (property_exists($object, 'productUrl')) {
            $this->productUrl = $object->productUrl;
        }
        if (property_exists($object, 'quantity')) {
            $this->quantity = $object->quantity;
        }
        if (property_exists($object, 'taxAmount')) {
            $this->taxAmount = $object->taxAmount;
        }
        if (property_exists($object, 'unit')) {
            $this->unit = $object->unit;
        }
        return $this;
    }
}
