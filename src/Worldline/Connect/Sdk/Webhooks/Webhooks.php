<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\Webhooks;

use Worldline\Connect\Sdk\V1\Webhooks\V1WebhooksFactory;

/**
 * Worldline Global Collect platform factory for several webhooks components.
 */
class Webhooks
{
    /** @var V1WebhooksFactory */
    private static $V1 = null;

    private function __construct() {
    }

    public static function v1() {
        if (is_null(self::$V1)) {
            self::$V1 = new V1WebhooksFactory();
        }
        return self::$V1;
    }
}
