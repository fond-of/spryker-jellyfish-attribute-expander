<?php

namespace FondOfSpryker\Zed\JellyfishAttributeExpander\Business\JellyfishAttribute;

use FondOfSpryker\Zed\JellyfishAttributeExpander\Dependency\Client\JellyfishAttributeExpanderToProductResourceAliasStorageClientInterface;
use Generated\Shared\Transfer\JellyfishOrderItemTransfer;

class JellyfishAttributeGenderReader implements JellyfishAttributeGenderReaderInterface
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
     * @return string|null
     */
    public function getGender(JellyfishOrderItemTransfer $jellyfishOrderItemTransfer): ?string
    {
        $concreteProduct = $this->productResourceAliasStorageClient->getProductConcreteStorageDataBySku($jellyfishOrderItemTransfer->getSku(), "de_de");
        $hasAttributes = array_key_exists("attributes", $concreteProduct);
        $attributes = $hasAttributes ? $concreteProduct["attributes"] : null;

        return $attributes ? $attributes["gender"] ?? null : null;
    }
}
