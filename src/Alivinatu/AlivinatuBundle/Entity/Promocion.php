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
     * @ORM\OneToMany(targetEntity="Servicio", mappedBy="promocion")
     */
    private $servicios;
    // ...

    public function __construct() {
        $this->servicios = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    
    
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
     * @var string $descuento
     *
     * @ORM\Column(name="descuento", type="string", length=255)
     */
    private $descuento;
    
    /**
     * @var string $nombrePromocion
     *
     * @ORM\Column(name="nombrePromocion", type="string", length=255)
     */
    private $nombrePromocion;


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
     * Set nombrePromocion
     *
     * @param string $nombrePromocion
     * @return promocion
     */
    public function setNombrePromocion($nombrePromocion)
    {
        $this->nombrePromocion = $nombrePromocion;
    
        return $this;
    }

    /**
     * Get nombrePromocion
     *
     * @return string 
     */
    public function getNombrePromocion()
    {
        return $this->nombrePromocion;
    }

    /**
     * Set descuento
     *
     * @param string $descuento
     * @return Promocion
     */
    public function setDescuento($descuento)
    {
        $this->descuento = $descuento;
    
        return $this;
    }

    /**
     * Get descuento
     *
     * @return string 
     */
    public function getDescuento()
    {
        return $this->descuento;
    }

    /**
     * Add servicios
     *
     * @param Alivinatu\AlivinatuBundle\Entity\Servicio $servicios
     * @return Promocion
     */
    public function addServicio(\Alivinatu\AlivinatuBundle\Entity\Servicio $servicios)
    {
        $this->servicios[] = $servicios;
    
        return $this;
    }

    /**
     * Remove servicios
     *
     * @param Alivinatu\AlivinatuBundle\Entity\Servicio $servicios
     */
    public function removeServicio(\Alivinatu\AlivinatuBundle\Entity\Servicio $servicios)
    {
        $this->servicios->removeElement($servicios);
    }

    /**
     * Get servicios
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getServicios()
    {
        return $this->servicios;
    }
}