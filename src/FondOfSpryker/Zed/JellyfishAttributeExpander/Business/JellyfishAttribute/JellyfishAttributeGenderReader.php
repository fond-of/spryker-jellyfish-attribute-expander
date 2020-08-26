<?php

namespace FondOfSprkyer\Zed\JellyfishAttributeExpander\Business\JellyfishAttribute;

use Generated\Shared\Transfer\JellyfishOrderItemTransfer;
use Spryker\Client\ProductResourceAliasStorage\ProductResourceAliasStorageClientInterface;

class JellyfishAttributeGenderReader implements JellyfishAttributeGenderReaderInterface
{
    /**
     * @var \Spryker\Client\ProductResourceAliasStorage\ProductResourceAliasStorageClientInterface
     */
    protected $productResourceAliasStorageClient;

    /**
     * @param \Spryker\Client\ProductResourceAliasStorage\ProductResourceAliasStorageClientInterface $productResourceAliasStorageClient
     */
    public function __construct(ProductResourceAliasStorageClientInterface $productResourceAliasStorageClient)
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
        return json_encode($this->productResourceAliasStorageClient->findProductAbstractStorageDataBySku($jellyfishOrderItemTransfer->getSku(), "de_de"));
        //return $this->productResourceAliasStorageClient->findProductAbstractStorageDataBySku($jellyfishOrderItemTransfer->getSku(), "de_de")["gender"] ?? null;
    }
}
