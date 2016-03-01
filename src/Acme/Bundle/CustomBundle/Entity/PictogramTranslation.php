<?php

namespace Acme\Bundle\CustomBundle\Entity;

use Pim\Bundle\CustomEntityBundle\Entity\AbstractCustomOptionTranslation;
use Akeneo\Component\Localization\Model\AbstractTranslation;

/**
 * @author Romain Monceau <romain@akeneo.com>
 */
class PictogramTranslation extends AbstractTranslation
{
    /**
     * @var string $label
     */
    protected $label;

    /**
     * @param string $label
     *
     * @return AbstractCustomOptionTranslation
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return AbstractCustomOptionTranslation
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return (string) $this->label;
    }
}
