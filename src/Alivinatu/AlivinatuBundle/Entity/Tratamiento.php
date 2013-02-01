<?php

namespace Alivinatu\AlivinatuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alivinatu\AlivinatuBundle\Entity\Tratamiento
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Alivinatu\AlivinatuBundle\Entity\TratamientoRepository")
 */
class Tratamiento
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
     */
    private $costo;

    /**
     * @var string $duracion
     *
     * @ORM\Column(name="duracion", type="string", length=255)
     */
    private $duracion;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var integer $nSesion
     *
     * @ORM\Column(name="nSesion", type="integer")
     */
    private $nSesion;


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
     * @return Tratamiento
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
     * Set duracion
     *
     * @param string $duracion
     * @return tratamiento
     */
    public function setDuracion($duracion)
    {
        $this->duracion = $duracion;
    
        return $this;
    }

    /**
     * Get duracion
     *
     * @return string 
     */
    public function getDuracion()
    {
        return $this->duracion;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return tratamiento
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

    /**
     * Set nSesion
     *
     * @param integer $nSesion
     * @return tratamiento
     */
    public function setNSesion($nSesion)
    {
        $this->nSesion = $nSesion;
    
        return $this;
    }

    /**
     * Get nSesion
     *
     * @return integer 
     */
    public function getNSesion()
    {
        return $this->nSesion;
    }
}