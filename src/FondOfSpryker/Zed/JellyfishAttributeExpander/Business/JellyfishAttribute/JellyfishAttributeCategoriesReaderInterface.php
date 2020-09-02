<?php


namespace FondOfSprkyer\Zed\JellyfishAttributeExpander\Business\JellyfishAttribute;

use Generated\Shared\Transfer\JellyfishOrderItemTransfer;

interface JellyfishAttributeCategoriesReaderInterface
{
    /**
     * @param \Generated\Shared\Transfer\JellyfishOrderItemTransfer $jellyfishOrderItemTransfer
     *
     * @return array|null
     */
    public function getCategories(JellyfishOrderItemTransfer $jellyfishOrderItemTransfer): ?array;
}
