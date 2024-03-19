<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1;

use Worldline\Connect\Sdk\V1\Domain\PayoutResult;

/**
 * Class DeclinedPayoutException
 *
 * @package Worldline\Connect\Sdk\V1
 */
class DeclinedPayoutException extends ResponseException
{
    /**
     * @return PayoutResult
     */
    public function getPayoutResult()
    {
        $responseVariables = get_object_vars($this->getResponse());
        if (!array_key_exists('payoutResult', $responseVariables)) {
            return new PayoutResult();
        }
        $payoutResult = $responseVariables['payoutResult'];
        if (!($payoutResult instanceof PayoutResult)) {
            return new PayoutResult();
        }
        return $payoutResult;
    }
}
