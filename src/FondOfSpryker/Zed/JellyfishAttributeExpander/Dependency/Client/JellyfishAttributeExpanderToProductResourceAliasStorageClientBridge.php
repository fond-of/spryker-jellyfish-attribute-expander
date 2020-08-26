<?php


namespace FondOfSpryker\Zed\JellyfishExtension\Dependency\Client;

use Spryker\Client\ProductResourceAliasStorage\ProductResourceAliasStorageClient;

class JellyfishAttributeExpanderToProductResourceAliasStorageClientBridge implements JellyfishAttributeExpanderToProductResourceAliasStorageClientInterface
{
    /**
     * @var \Spryker\Client\ProductResourceAliasStorage\ProductResourceAliasStorageClient
     */
    protected $productResourceAliasStorageClient;

    /**
     * @param \Spryker\Client\ProductResourceAliasStorage\ProductResourceAliasStorageClient $productResourceAliasStorageClient
     */
    public function __construct(ProductResourceAliasStorageClient $productResourceAliasStorageClient)
    {
        $this->productResourceAliasStorageClient = $productResourceAliasStorageClient;
    }

    /**
     * @param string $sku
     * @param string $localeName
     *
     * @return array|null
     */
    public function findProductAbstractStorageDataBySku(string $sku, string $localeName): ?array
    {
        return $this->productResourceAliasStorageClient->findProductAbstractStorageDataBySku($sku, $localeName);
    }
}
