<?php

namespace Acme\Bundle\CustomBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomEntity;

/**
 * @author Romain Monceau <romain@akeneo.com>
 */
class Brand extends AbstractCustomEntity
{
    public function getCustomEntityName()
    {
        return 'brand';
    }
}
