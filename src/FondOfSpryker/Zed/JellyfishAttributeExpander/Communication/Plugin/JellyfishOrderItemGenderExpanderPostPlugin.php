<?php

namespace FondOfSpryker\Zed\JellyfishAttributeExpander\Communication\Plugin;

use FondOfSpryker\Zed\JellyfishExtension\Dependency\Plugin\JellyfishOrderItemExpanderPostMapPluginInterface;
use Generated\Shared\Transfer\JellyfishOrderItemTransfer;
use Orm\Zed\Sales\Persistence\SpySalesOrderItem;

/**
 * @method \FondOfSprkyer\Zed\JellyfishAttributeExpander\Business\JellyfishAttributeExpanderFacadeInterface getFacade()
 */
class JellyfishOrderItemGenderExpanderPostPlugin implements JellyfishOrderItemExpanderPostMapPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\JellyfishOrderItemTransfer $jellyfishOrderItemTransfer
     * @param \Orm\Zed\Sales\Persistence\SpySalesOrderItem $salesOrderItem
     *
     * @return \Generated\Shared\Transfer\JellyfishOrderItemTransfer
     */
    public function expand(
        JellyfishOrderItemTransfer $jellyfishOrderItemTransfer,
        SpySalesOrderItem $salesOrderItem
    ): JellyfishOrderItemTransfer {
        $jellyfishOrderItemTransfer->setGender($this->getFacade()->getGender($jellyfishOrderItemTransfer));

        return $jellyfishOrderItemTransfer;
    }
}
