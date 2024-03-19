<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1;

use Worldline\Connect\Sdk\V1\Domain\RefundResult;

/**
 * Class DeclinedRefundException
 *
 * @package Worldline\Connect\Sdk\V1
 */
class DeclinedRefundException extends ResponseException
{
    /**
     * @return RefundResult
     */
    public function getRefundResult()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('refundResult', $responseVariables)) {
            return new RefundResult();
        }
        $refundResult = $responseVariables['refundResult'];
        if (!($refundResult instanceof RefundResult)) {
            return new RefundResult();
        }
        return $refundResult;
    }
}
