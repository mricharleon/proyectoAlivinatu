<?php

namespace Alivinatu\AlivinatuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PromocionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('nombrePromocion', 'text', array('label'=>'Nombre'))
                ->add('descuento', 'text', array('label' => 'Descuento'))
                ->add('descripcion', 'textarea', array('label'=>'Descripción'));
    }
    
    /*public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Alivinatu\AlivinatuBundle\Entity\Cliente'
        );
    }*/

    public function getName() {
        return 'promocion_form';
    }
}
