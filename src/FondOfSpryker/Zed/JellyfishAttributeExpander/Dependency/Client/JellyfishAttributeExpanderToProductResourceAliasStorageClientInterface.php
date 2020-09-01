<?php

namespace FondOfSpryker\Zed\JellyfishAttributeExpander\Dependency\Client;

interface JellyfishAttributeExpanderToProductResourceAliasStorageClientInterface
{
    /**
     * @param string $sku
     * @param string $localeName
     *
     * @return array|null
     */
    public function getProductConcreteStorageDataBySku(string $sku, string $localeName): ?array;
}
