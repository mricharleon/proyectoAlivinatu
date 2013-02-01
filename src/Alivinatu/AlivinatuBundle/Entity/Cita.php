<?php

namespace Alivinatu\AlivinatuBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alivinatu\AlivinatuBundle\Entity\Cita
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Alivinatu\AlivinatuBundle\Entity\CitaRepository")
 */
class Cita
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
     * @var integer $nCita
     *
     * @ORM\Column(name="nCita", type="integer")
     */
    private $nCita;


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
     * @return Cita
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
     * Set nCita
     *
     * @param integer $nCita
     * @return Cita
     */
    public function setNCita($nCita)
    {
        $this->nCita = $nCita;
    
        return $this;
    }

    /**
     * Get nCita
     *
     * @return integer 
     */
    public function getNCita()
    {
        return $this->nCita;
    }
}