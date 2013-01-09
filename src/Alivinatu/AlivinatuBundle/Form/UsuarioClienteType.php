<?php

namespace Alivinatu\AlivinatuBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class UsuarioClienteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('usuario', 'text', array('label'=>'Usuario'))
                ->add('password', 'repeated', array('type' => 'password'))
                ->add('nombre', 'text', array('label'=>'Nombre'))
                ->add('apellido', 'text', array('label'=>'Apellido'))
                ->add('cedula', 'text', array('label'=>'Cedula'))
                ->add('genero', 'choice', array(
                        'choices' => array('m' => 'Masculino', 'f' => 'Femenino')))
                ->add('fNacimiento', 'text', array('label'=>'Nacimiento'))
                ->add('rol', 'choice', array(
                        'choices' => array('ROLE_USER' => 'Usuario')
        ));
    }
    
    /*public function getDefaultOptions(array $options) {
        return array(
            'data_class' => 'Alivinatu\AlivinatuBundle\Entity\Cliente'
        );
    }*/

    public function getName() {
        return 'usuario_form';
    }
}
