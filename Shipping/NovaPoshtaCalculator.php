<?php
namespace Stfalcon\Bundle\ShippingBundle\Shipping;

use Sylius\Component\Shipping\Calculator\Calculator;
use Sylius\Component\Shipping\Model\ShippingSubjectInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NovaPoshtaCalculator extends Calculator
{
    /**
     * {@inheritdoc}
     */
    public function calculate(ShippingSubjectInterface $subject, array $configuration)
    {
        if ($subject->getShippingItemCount() > $configuration['limit']) {
            return 0;
        }

        return 0; //$this->dhlService->getShippingCostForWeight($subject->getShippingWeight());
    }

    /**
     * {@inheritdoc}
     */
    public function setConfiguration(OptionsResolverInterface $resolver)
    {
        $resolver
            ->setDefaults(array(
                'limit'  => 10,
                'apiKey' => ''
            ))
            ->setAllowedTypes(array(
                'limit'  => array('integer'),
                'apiKey' => array('text'),
            ));
    }

    /**
     * {@inheritdoc}
     */
    public function isConfigurable()
    {
        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function getConfigurationFormType()
    {
        return 'stfalcon_shipping_calculator_nova_poshta';
    }
}