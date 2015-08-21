<?php

namespace Acme\Bundle\CustomBundle\Form\Type;

use Pim\Bundle\EnrichBundle\Form\Subscriber\DisableFieldSubscriber;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

/**
 * @author Romain Monceau <romain@akeneo.com>
 */
class PictogramType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('code')
            ->add(
                'label',
                'pim_translatable_field',
                [
                    'field'             => 'label',
                    'translation_class' => $options['translation_class'],
                    'entity_class'      => $options['data_class'],
                    'property_path'     => 'translations'
                ]
            )
            ->addEventSubscriber(new DisableFieldSubscriber('code'));;
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setRequired(['translation_class']);
    }

    public function getName()
    {
        return 'acme_enrich_pictogram';
    }
}
