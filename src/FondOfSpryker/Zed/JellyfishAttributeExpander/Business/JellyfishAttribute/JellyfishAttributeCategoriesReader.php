<?php


namespace FondOfSprkyer\Zed\JellyfishAttributeExpander\Business\JellyfishAttribute;

use FondOfSpryker\Zed\JellyfishAttributeExpander\Dependency\Client\JellyfishAttributeExpanderToProductResourceAliasStorageClientInterface;
use Generated\Shared\Transfer\JellyfishOrderItemTransfer;

class JellyfishAttributeCategoriesReader implements JellyfishAttributeCategoriesReaderInterface
{
    /**
     * @var \FondOfSpryker\Zed\JellyfishAttributeExpander\Dependency\Client\JellyfishAttributeExpanderToProductResourceAliasStorageClientInterface
     */
    protected $productResourceAliasStorageClient;

    /**
     * @param \FondOfSpryker\Zed\JellyfishAttributeExpander\Dependency\Client\JellyfishAttributeExpanderToProductResourceAliasStorageClientInterface $productResourceAliasStorageClient
     */
    public function __construct(JellyfishAttributeExpanderToProductResourceAliasStorageClientInterface $productResourceAliasStorageClient)
    {
        $this->productResourceAliasStorageClient = $productResourceAliasStorageClient;
    }

    /**
     * @param \Generated\Shared\Transfer\JellyfishOrderItemTransfer $jellyfishOrderItemTransfer
     *
     * @return array|null
     */
    public function getCategories(JellyfishOrderItemTransfer $jellyfishOrderItemTransfer): ?array
    {
        $abstractProduct = $this->productResourceAliasStorageClient->findProductAbstractStorageDataBySku($jellyfishOrderItemTransfer->getSku(), "de_de");

        return $abstractProduct;
    }
}
