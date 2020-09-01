<?php

namespace FondOfSpryker\Zed\JellyfishAttributeExpander\Business\JellyfishAttribute;

use Generated\Shared\Transfer\JellyfishOrderItemTransfer;

interface JellyfishAttributeGenderReaderInterface
{
    /**
     * @param \Generated\Shared\Transfer\JellyfishOrderItemTransfer $jellyfishOrderItemTransfer
     *
     * @return string|null
     */
    public function getGender(JellyfishOrderItemTransfer $jellyfishOrderItemTransfer): ?string;
}
