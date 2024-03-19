<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1;

use Worldline\Connect\Sdk\V1\Domain\CreatePaymentResult;

/**
 * Class DeclinedPaymentException
 *
 * @package Worldline\Connect\Sdk\V1
 */
class DeclinedPaymentException extends ResponseException
{
    /**
     * @return CreatePaymentResult
     */
    public function getCreatePaymentResult()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('paymentResult', $responseVariables)) {
            return new CreatePaymentResult();
        }
        $paymentResult = $responseVariables['paymentResult'];
        if (!($paymentResult instanceof CreatePaymentResult)) {
            return new CreatePaymentResult();
        }
        return $paymentResult;
    }
}
