<?php

namespace Alivinatu\AlivinatuBundle\Validator;

use Symfony\Component\Validator\Constraint;


/**
 * @Annotation
 */
class CI extends Constraint
{

    public $message = 'No es una Cédula valida';

    public function getTargets()
    {
        return self::PROPERTY_CONSTRAINT;
    }
}
