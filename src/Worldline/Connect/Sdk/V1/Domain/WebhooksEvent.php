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
class WebhooksEvent extends DataObject
{
    /**
     * @var string
     */
    public $apiVersion = null;

    /**
     * @var string
     */
    public $created = null;

    /**
     * @var DisputeResponse
     */
    public $dispute = null;

    /**
     * @var string
     */
    public $id = null;

    /**
     * @var string
     */
    public $merchantId = null;

    /**
     * @var PaymentResponse
     */
    public $payment = null;

    /**
     * @var PayoutResponse
     */
    public $payout = null;

    /**
     * @var RefundResponse
     */
    public $refund = null;

    /**
     * @var TokenResponse
     */
    public $token = null;

    /**
     * @var string
     */
    public $type = null;

    /**
     * @return object
     */
    public function toObject()
    {
        $object = parent::toObject();
        if (!is_null($this->apiVersion)) {
            $object->apiVersion = $this->apiVersion;
        }
        if (!is_null($this->created)) {
            $object->created = $this->created;
        }
        if (!is_null($this->dispute)) {
            $object->dispute = $this->dispute->toObject();
        }
        if (!is_null($this->id)) {
            $object->id = $this->id;
        }
        if (!is_null($this->merchantId)) {
            $object->merchantId = $this->merchantId;
        }
        if (!is_null($this->payment)) {
            $object->payment = $this->payment->toObject();
        }
        if (!is_null($this->payout)) {
            $object->payout = $this->payout->toObject();
        }
        if (!is_null($this->refund)) {
            $object->refund = $this->refund->toObject();
        }
        if (!is_null($this->token)) {
            $object->token = $this->token->toObject();
        }
        if (!is_null($this->type)) {
            $object->type = $this->type;
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
        if (property_exists($object, 'apiVersion')) {
            $this->apiVersion = $object->apiVersion;
        }
        if (property_exists($object, 'created')) {
            $this->created = $object->created;
        }
        if (property_exists($object, 'dispute')) {
            if (!is_object($object->dispute)) {
                throw new UnexpectedValueException('value \'' . print_r($object->dispute, true) . '\' is not an object');
            }
            $value = new DisputeResponse();
            $this->dispute = $value->fromObject($object->dispute);
        }
        if (property_exists($object, 'id')) {
            $this->id = $object->id;
        }
        if (property_exists($object, 'merchantId')) {
            $this->merchantId = $object->merchantId;
        }
        if (property_exists($object, 'payment')) {
            if (!is_object($object->payment)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payment, true) . '\' is not an object');
            }
            $value = new PaymentResponse();
            $this->payment = $value->fromObject($object->payment);
        }
        if (property_exists($object, 'payout')) {
            if (!is_object($object->payout)) {
                throw new UnexpectedValueException('value \'' . print_r($object->payout, true) . '\' is not an object');
            }
            $value = new PayoutResponse();
            $this->payout = $value->fromObject($object->payout);
        }
        if (property_exists($object, 'refund')) {
            if (!is_object($object->refund)) {
                throw new UnexpectedValueException('value \'' . print_r($object->refund, true) . '\' is not an object');
            }
            $value = new RefundResponse();
            $this->refund = $value->fromObject($object->refund);
        }
        if (property_exists($object, 'token')) {
            if (!is_object($object->token)) {
                throw new UnexpectedValueException('value \'' . print_r($object->token, true) . '\' is not an object');
            }
            $value = new TokenResponse();
            $this->token = $value->fromObject($object->token);
        }
        if (property_exists($object, 'type')) {
            $this->type = $object->type;
        }
        return $this;
    }
}
