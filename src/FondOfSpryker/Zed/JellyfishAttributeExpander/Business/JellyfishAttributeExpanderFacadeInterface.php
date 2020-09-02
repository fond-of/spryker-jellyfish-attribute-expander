<?php

namespace FondOfSpryker\Zed\JellyfishAttributeExpander\Business;

use Generated\Shared\Transfer\JellyfishOrderItemTransfer;

interface JellyfishAttributeExpanderFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\JellyfishOrderItemTransfer $jellyfishOrderItemTransfer
     *
     * @return string|null
     */
    public function getGender(
        JellyfishOrderItemTransfer $jellyfishOrderItemTransfer
    ): ?string;

    /**
     * @param \Generated\Shared\Transfer\JellyfishOrderItemTransfer $jellyfishOrderItemTransfer
     *
     * @return array|null
     */
    public function getCategories(
        JellyfishOrderItemTransfer $jellyfishOrderItemTransfer
    ): ?array;
}
