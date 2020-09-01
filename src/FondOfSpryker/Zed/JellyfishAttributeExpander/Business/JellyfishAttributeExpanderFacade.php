<?php

namespace FondOfSpryker\Zed\JellyfishAttributeExpander\Business;

use Generated\Shared\Transfer\JellyfishOrderItemTransfer;

/**
 * @method \FondOfSpryker\Zed\JellyfishAttributeExpander\Business\JellyfishAttributeExpanderBusinessFactory getFactory()
 */
class JellyfishAttributeExpanderFacade implements JellyfishAttributeExpanderFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\JellyfishOrderItemTransfer $jellyfishOrderItemTransfer
     *
     * @return string|null
     */
    public function getGender(
        JellyfishOrderItemTransfer $jellyfishOrderItemTransfer
    ): ?string {
        return $this->getFactory()
            ->createJellyfishAttributeGenderReader()
            ->getGender($jellyfishOrderItemTransfer);
    }
}
