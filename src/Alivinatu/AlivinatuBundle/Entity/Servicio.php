<?php

namespace Alivinatu\AlivinatuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Alivinatu\AlivinatuBundle\Entity\Servicio
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Alivinatu\AlivinatuBundle\Entity\ServicioRepository")
 */
class Servicio
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $costo
     *
     * @ORM\Column(name="costo", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(4)
     * @Assert\MaxLength(4)
     */
    private $costo;

    /**
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(5)
     */
    private $descripcion;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     * @Assert\NotBlank()
     * @Assert\MinLength(10)
     * @Assert\MaxLength(30)
     */
    private $nombre;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set costo
     *
     * @param string $costo
     * @return Servicio
     */
    public function setCosto($costo)
    {
        $this->costo = $costo;
    
        return $this;
    }

    /**
     * Get costo
     *
     * @return string 
     */
    public function getCosto()
    {
        return $this->costo;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     * @return Servicio
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;
    
        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string 
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return servicio
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    
        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }
}
