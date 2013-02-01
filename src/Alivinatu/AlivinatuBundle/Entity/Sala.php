<?php

namespace Alivinatu\AlivinatuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alivinatu\AlivinatuBundle\Entity\Sala
 *
 * @ORM\Table(name="Sala")
 * @ORM\Entity(repositoryClass="Alivinatu\AlivinatuBundle\Entity\SalaRepository")
 */
class Sala
{
    /**
     * @ORM\ManyToMany(targetEntity="Servicio")
     * @ORM\JoinTable(name="sala_servicio",
     *  joinColumns={@ORM\JoinColumn(name="sala_id", referencedColumnName="id")},
     *  inverseJoinColumns={@ORM\JoinColumn(name="servicio_id", referencedColumnName="id", unique=true)}
     *      )
     */
    private $servicios;

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
     * @var string $estado
     *
     * @ORM\Column(name="estado", type="string", length=255)
     */
    private $estado;

    /**
     * @var string $nombreSala
     *
     * @ORM\Column(name="nombreSala", type="string", length=255)
     */
    private $nombreSala;

    /**
     * @var integer $numero
     *
     * @ORM\Column(name="numero", type="integer")
     */
    private $numero;


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
     * @return Sala
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
     * Set estado
     *
     * @param string $estado
     * @return Sala
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    
        return $this;
    }

    /**
     * Get estado
     *
     * @return string 
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Sala
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    
        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Add servicios
     *
     * @param Alivinatu\AlivinatuBundle\Entity\Servicio $servicios
     * @return Sala
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

    /**
     * Set nombreSala
     *
     * @param string $nombreSala
     * @return Sala
     */
    public function setNombreSala($nombreSala)
    {
        $this->nombreSala = $nombreSala;
    
        return $this;
    }

    /**
     * Get nombreSala
     *
     * @return string 
     */
    public function getNombreSala()
    {
        return $this->nombreSala;
    }
}