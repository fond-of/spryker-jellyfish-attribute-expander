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
}
