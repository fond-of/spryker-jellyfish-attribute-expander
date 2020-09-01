<?php

namespace FondOfSpryker\Zed\JellyfishAttributeExpander;

use FondOfSpryker\Zed\JellyfishAttributeExpander\Dependency\Client\JellyfishAttributeExpanderToProductResourceAliasStorageClientBridge;
use Spryker\Zed\Kernel\AbstractBundleDependencyProvider;
use Spryker\Zed\Kernel\Container;

class JellyfishAttributeExpanderDependencyProvider extends AbstractBundleDependencyProvider
{
    public const PRODUCT_RESOURCE_ALIAS_STORAGE_CLIENT = "PRODUCT_RESOURCE_ALIAS_STORAGE_CLIENT";

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    public function provideBusinessLayerDependencies(Container $container): Container
    {
        $container = parent::provideBusinessLayerDependencies($container);

        $container = $this->addProductResourceAliasStorageClient($container);

        return $container;
    }

    /**
     * @param \Spryker\Zed\Kernel\Container $container
     *
     * @return \Spryker\Zed\Kernel\Container
     */
    protected function addProductResourceAliasStorageClient(Container $container): Container
    {
        $container[static::PRODUCT_RESOURCE_ALIAS_STORAGE_CLIENT] = static function (Container $container) {
            return new JellyfishAttributeExpanderToProductResourceAliasStorageClientBridge(
                $container->getLocator()->productResourceAliasStorage()->client()
            );
        };

        return $container;
    }
}
