<?php

namespace Alivinatu\AlivinatuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class SalaType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('numero', 'integer', array('label'=>'Número'))
                ->add('nombreSala', 'text', array('label'=>'Nombre'))
                ->add('estado', 'choice', array(
                        'choices' => array('Disponible' => 'Disponible', 'Ocupado' => 'Ocupado')))
                ->add('descripcion', 'textarea', array('label'=>'Descripción'));
    }
    
    /*public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Alivinatu\AlivinatuBundle\Entity\Cliente'
        );
    }*/

    public function getName() {
        return 'sala_form';
    }
}
