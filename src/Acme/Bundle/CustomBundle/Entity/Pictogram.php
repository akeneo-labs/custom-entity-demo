<?php

namespace Acme\Bundle\CustomBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractTranslatableCustomOption;

/**
 * @author Romain Monceau <romain@akeneo.com>
 */
class Pictogram extends AbstractTranslatableCustomOption
{
    /**
     * Get translation full qualified class name
     *
     * @return string
     */
    public function getTranslationFQCN()
    {
        return 'Acme\Bundle\CustomBundle\Entity\PictogramTranslation';
    }

    /**
     * Returns the custom entity name used in the configuration
     * Used to map row actions on datagrid
     *
     * @return string
     */
    public function getCustomEntityName()
    {
        return 'pictogram';
    }
}
