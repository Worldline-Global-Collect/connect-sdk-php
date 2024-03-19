<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1\Merchant\Services;

use Worldline\Connect\Sdk\Communication\RequestObject;

/**
 * Query parameters for Convert amount
 *
 * @package Worldline\Connect\Sdk\V1\Merchant\Services
 * @link https://apireference.connect.worldline-solutions.com/s2sapi/v1/en_US/php/services/convertAmount.html Convert amount
 */
class ConvertAmountParams extends RequestObject
{
    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $target;

    /**
     * @var int
     */
    public $amount;
}
