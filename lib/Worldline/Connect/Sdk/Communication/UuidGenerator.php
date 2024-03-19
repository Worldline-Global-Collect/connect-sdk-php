<?php
namespace Worldline\Connect\Sdk\Communication;

/**
 * Class UuidGenerator
 * Generator class for v4 UUID's
 *
 * @package Worldline\Connect\Sdk\Communication
 */
class UuidGenerator
{
    private function __construct()
    {
    }

    /** @return string */
    public static function generatedUuid()
    {
        return sprintf(
            '%04x%04x-%04x-%04x-%04x-%04x%04x%04x',
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0x0fff) | 0x4000,
            mt_rand(0, 0x3fff) | 0x8000,
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff),
            mt_rand(0, 0xffff)
        );
    }
}
