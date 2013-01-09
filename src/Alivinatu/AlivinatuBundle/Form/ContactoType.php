<?php

namespace Alivinatu\AlivinatuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class ContactoType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('celular', 'text', array('label'=>'Celular'))
                ->add('telefono', 'text', array('label'=>'Telefono'))
                ->add('email', 'email', array('label'=>'Email'))
                ->add('provincia', 'text', array('label'=>'Provincia'))
                ->add('ciudad', 'text', array('label'=>'Ciudad'))
                ->add('calle', 'text', array('label'=>'Calles'))
                ->add('observacion', 'textarea', array('label'=>'Observaciones'));
    }
    
    /*public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Alivinatu\AlivinatuBundle\Entity\Cliente'
        );
    }*/

    public function getName() {
        return 'contacto_form';
    }
}
