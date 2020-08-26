<?php

namespace FondOfSprkyer\Zed\JellyfishAttributeExpander\Business;

use Generated\Shared\Transfer\JellyfishOrderItemTransfer;

/**
 * @method \FondOfSprkyer\Zed\JellyfishAttributeExpander\Business\JellyfishAttributeExpanderBusinessFactory getFactory()
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
