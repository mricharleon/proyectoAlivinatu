<?php

namespace Alivinatu\AlivinatuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alivinatu\AlivinatuBundle\Entity\Cuota
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Alivinatu\AlivinatuBundle\Entity\CuotaRepository")
 */
class Cuota
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
     * @var string $estado
     *
     * @ORM\Column(name="estado", type="string", length=2)
     */
    private $estado;

    /**
     * @var string $valor
     *
     * @ORM\Column(name="valor", type="string", length=255)
     */
    private $valor;

    /**
     * @var string $interes
     *
     * @ORM\Column(name="interes", type="string", length=255)
     */
    private $interes;


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
     * Set estado
     *
     * @param string $estado
     * @return Cuota
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
     * Set valor
     *
     * @param string $valor
     * @return Cuota
     */
    public function setValor($valor)
    {
        $this->valor = $valor;
    
        return $this;
    }

    /**
     * Get valor
     *
     * @return string 
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * Set interes
     *
     * @param string $interes
     * @return cuota
     */
    public function setInteres($interes)
    {
        $this->interes = $interes;
    
        return $this;
    }

    /**
     * Get interes
     *
     * @return string 
     */
    public function getInteres()
    {
        return $this->interes;
    }
}