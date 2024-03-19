<?php
/*
 * This class was auto-generated from the API references found at
 * https://apireference.connect.worldline-solutions.com/
 */
namespace Worldline\Connect\Sdk\V1\Webhooks;

use Worldline\Connect\Sdk\Webhooks\SecretKeyStore;

/**
 * Worldline Global Collect platform factory for several v1 webhooks components.
 */
class V1WebhooksFactory
{
    /**
     * Creates a {@link WebhooksHelper} that will use the given {@link SecretKeyStore}.
     */
    public function createHelper(SecretKeyStore $secretKeyStore) {
        return new WebhooksHelper($secretKeyStore);
    }
}
