<?php

namespace FondOfSpryker\Zed\JellyfishAttributeExpander\Business;

use FondOfSpryker\Zed\JellyfishAttributeExpander\Business\JellyfishAttribute\JellyfishAttributeGenderReader;
use FondOfSpryker\Zed\JellyfishAttributeExpander\Business\JellyfishAttribute\JellyfishAttributeGenderReaderInterface;
use FondOfSpryker\Zed\JellyfishAttributeExpander\Dependency\Client\JellyfishAttributeExpanderToProductResourceAliasStorageClientInterface;
use FondOfSpryker\Zed\JellyfishAttributeExpander\JellyfishAttributeExpanderDependencyProvider;
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
     * @return \FondOfSpryker\Zed\JellyfishAttributeExpander\Dependency\Client\JellyfishAttributeExpanderToProductResourceAliasStorageClientInterface
     */
    public function getProductResourceAliasStorageClient(): JellyfishAttributeExpanderToProductResourceAliasStorageClientInterface
    {
        return $this->getProvidedDependency(JellyfishAttributeExpanderDependencyProvider::PRODUCT_RESOURCE_ALIAS_STORAGE_CLIENT);
    }
}
