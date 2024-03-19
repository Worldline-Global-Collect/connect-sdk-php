<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1\Merchant\Products;

use Worldline\Connect\Sdk\Communication\RequestObject;

/**
 * Query parameters for Get payment products
 *
 * @package Worldline\Connect\Sdk\V1\Merchant\Products
 * @link https://apireference.connect.worldline-solutions.com/s2sapi/v1/en_US/php/products/find.html Get payment products
 */
class FindProductsParams extends RequestObject
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
     * @var string
     */
    public $locale;

    /**
     * @var int
     */
    public $amount;

    /**
     * @var bool
     */
    public $isRecurring;

    /**
     * @var bool
     */
    public $isInstallments;

    /**
     * @var string[]
     */
    public $hide;
}
