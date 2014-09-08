<?php

namespace Stfalcon\Bundle\ShippingBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\Validator\Constraints\Type;

class NovaPoshtaConfigurationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('limit', 'integer', array(
                'label'       => 'Free shipping above total items',
                'constraints' => array(
                    new NotBlank(),
                    new Type(array('type' => 'integer')),
                )
            ))
            ->add('apiKey', 'text', array(
                'label'       => 'Nova Poshta API key',
                'constraints' => array(
                    new NotBlank()
                )
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'data_class' => null
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function getName()
    {
        return 'stfalcon_shipping_calculator_nova_poshta';
    }
}
 