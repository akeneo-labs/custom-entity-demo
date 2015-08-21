<?php

namespace Acme\Bundle\CustomBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

/**
 * @author Romain Monceau <romain@akeneo.com>
 */
class BrandType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code');
    }

    public function getName()
    {
        return 'acme_enrich_brand';
    }
}
