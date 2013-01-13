<?php

namespace Alivinatu\AlivinatuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alivinatu\AlivinatuBundle\Entity\Promocion
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Alivinatu\AlivinatuBundle\Entity\PromocionRepository")
 */
class Promocion
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
     * @var string $descripcion
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     */
    private $descripcion;

    /**
     * @var \DateTime $fInicio
     *
     * @ORM\Column(name="fInicio", type="date")
     */
    private $fInicio;

    /**
     * @var \DateTime $fFin
     *
     * @ORM\Column(name="fFin", type="date")
     */
    private $fFin;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
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
     * Set descripcion
     *
     * @param string $descripcion
     * @return Promocion
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
     * Set fInicio
     *
     * @param \DateTime $fInicio
     * @return promocion
     */
    public function setFInicio($fInicio)
    {
        $this->fInicio = $fInicio;
    
        return $this;
    }

    /**
     * Get fInicio
     *
     * @return \DateTime 
     */
    public function getFInicio()
    {
        return $this->fInicio;
    }

    /**
     * Set fFin
     *
     * @param \DateTime $fFin
     * @return promocion
     */
    public function setFFin($fFin)
    {
        $this->fFin = $fFin;
    
        return $this;
    }

    /**
     * Get fFin
     *
     * @return \DateTime 
     */
    public function getFFin()
    {
        return $this->fFin;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return promocion
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
