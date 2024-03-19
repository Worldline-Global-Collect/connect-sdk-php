<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1\Merchant\Refunds;

use Worldline\Connect\Sdk\Communication\RequestObject;

/**
 * Query parameters for Find refunds
 *
 * @package Worldline\Connect\Sdk\V1\Merchant\Refunds
 * @link https://apireference.connect.worldline-solutions.com/s2sapi/v1/en_US/php/refunds/find.html Find refunds
 */
class FindRefundsParams extends RequestObject
{
    /**
     * @var string
     */
    public $hostedCheckoutId;

    /**
     * @var string
     */
    public $merchantReference;

    /**
     * @var int
     */
    public $merchantOrderId;

    /**
     * @var int
     */
    public $offset;

    /**
     * @var int
     */
    public $limit;
}
