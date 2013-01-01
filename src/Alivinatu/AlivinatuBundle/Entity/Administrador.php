<?php

namespace Alivinatu\AlivinatuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="administrador")
 * @ORM\Entity
 */
class Administrador
{
    /**
     * @ORM\id
     * @ORM\Column(Type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    
    /**
     * @ORM\Column(Type="string")
     */
    private $usuario;
    
    /**
     * @ORM\Column(Type="string")
     */
    private $password;
    
    /**
     * @ORM\Column(Type="string")
     */
    private $nombre;
    
    /**
     * @ORM\Column(Type="string")
     */
    private $apellido;
}

?>
