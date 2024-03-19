<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1\Merchant\Products;

use Worldline\Connect\Sdk\Communication\RequestObject;

/**
 * Query parameters for Get payment product networks
 *
 * @package Worldline\Connect\Sdk\V1\Merchant\Products
 * @link https://apireference.connect.worldline-solutions.com/s2sapi/v1/en_US/php/products/networks.html Get payment product networks
 */
class NetworksParams extends RequestObject
{
    /**
     * @var string
     */
    public $countryCode;

    /**
     * @var string
     */
    public $currencyCode;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var bool
     */
    public $isRecurring;
}
