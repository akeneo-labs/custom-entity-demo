<?php

namespace Acme\Bundle\CustomBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @author Romain Monceau <romain@akeneo.com>
 */
class ColorType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array                $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add('name')
            ->add('hex')
            ->add('red')
            ->add('green')
            ->add('blue')
            ->add('hue')
            ->add('hslSaturation')
            ->add('light')
            ->add('hsvSaturation')
            ->add('value')
        ;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'acme_enrich_color';
    }
}
