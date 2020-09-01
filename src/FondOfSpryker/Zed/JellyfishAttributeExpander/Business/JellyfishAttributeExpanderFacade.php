<?php

namespace FondOfSpryker\Zed\JellyfishAttributeExpander\Business;

use Generated\Shared\Transfer\JellyfishOrderItemTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \FondOfSpryker\Zed\JellyfishAttributeExpander\Business\JellyfishAttributeExpanderBusinessFactory getFactory()
 */
class JellyfishAttributeExpanderFacade extends AbstractFacade implements JellyfishAttributeExpanderFacadeInterface
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
