<?php

namespace Alivinatu\AlivinatuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alivinatu\AlivinatuBundle\Entity\Administrador
 *
 * @ORM\Table(name="administrador")
 * @ORM\Entity(repositoryClass="Alivinatu\AlivinatuBundle\Entity\AdministradorRepository")
 */
class Administrador extends Usuario
{
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}