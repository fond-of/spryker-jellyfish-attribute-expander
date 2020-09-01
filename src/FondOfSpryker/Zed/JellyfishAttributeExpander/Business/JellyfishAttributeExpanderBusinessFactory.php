<?php

namespace FondOfSpryker\Zed\JellyfishAttributeExpander\Business;

use FondOfSpryker\Zed\JellyfishAttributeExpander\Business\JellyfishAttribute\JellyfishAttributeGenderReader;
use FondOfSpryker\Zed\JellyfishAttributeExpander\Business\JellyfishAttribute\JellyfishAttributeGenderReaderInterface;
use FondOfSpryker\Zed\JellyfishAttributeExpander\JellyfishAttributeExpanderDependencyProvider;
use Spryker\Client\ProductResourceAliasStorage\ProductResourceAliasStorageClientInterface;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

class JellyfishAttributeExpanderBusinessFactory extends AbstractBusinessFactory
{
    /**
     * @return \FondOfSpryker\Zed\JellyfishAttributeExpander\Business\JellyfishAttribute\JellyfishAttributeGenderReaderInterface
     */
    public function createJellyfishAttributeGenderReader(): JellyfishAttributeGenderReaderInterface
    {
        return new JellyfishAttributeGenderReader(
            $this->getProductResourceAliasStorageClient()
        );
    }

    /**
     * @return \Spryker\Client\ProductResourceAliasStorage\ProductResourceAliasStorageClientInterface
     */
    public function getProductResourceAliasStorageClient(): ProductResourceAliasStorageClientInterface
    {
        return $this->getProvidedDependency(JellyfishAttributeExpanderDependencyProvider::PRODUCT_RESOURCE_ALIAS_STORAGE_CLIENT);
    }
}
