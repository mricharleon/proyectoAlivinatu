<?php

namespace Alivinatu\AlivinatuBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

/**
 * Alivinatu\AlivinatuBundle\Entity\Contacto
 *
 * @ORM\Table(name="contacto")
 * @ORM\Entity(repositoryClass="Alivinatu\AlivinatuBundle\Entity\ContactoRepository")
 */
class Contacto
{
    
    /**
     * @ORM\OneToOne(targetEntity="Usuario", mappedBy="contacto")
     */
    private $usuario;
    
    
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string $calle
     *
     * @ORM\Column(name="calle", type="string")
     * @Assert\NotBlank()
     * @Assert\MinLength(15)
     * @Assert\MaxLength(50)
     */
    private $calle;

    /**
     * @var string $ciudad
     *
     * @ORM\Column(name="ciudad", type="string")
     * @Assert\NotBlank()
     * @Assert\MinLength(4)
     * @Assert\MaxLength(12)
     */
    private $ciudad;

    /**
     * @var string $email
     *
     * @ORM\Column(name="email", type="string")
     * @Assert\Email()
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @var string $celular
     *
     * @ORM\Column(name="celular", type="string")
     * @Assert\NotBlank()
     * @Assert\MinLength(10)
     * @Assert\MaxLength(10)
     */
    private $celular;

    /**
     * @var string $telefono
     *
     * @ORM\Column(name="telefono", type="string")
     * @Assert\NotBlank()
     * @Assert\MinLength(7)
     * @Assert\MaxLength(10)
     */
    private $telefono;

    /**
     * @var string $observacion
     *
     * @ORM\Column(name="observacion", type="string")
     * @Assert\NotBlank()
     * @Assert\MinLength(10)
     * @Assert\MaxLength(255)
     */
    private $observacion;

    /**
     * @var string $provincia
     *
     * @ORM\Column(name="provincia", type="string")
     * @Assert\NotBlank()
     * @Assert\MinLength(4)
     * @Assert\MaxLength(12)
     */
    private $provincia;


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
     * Set calle
     *
     * @param string $calle
     * @return Contacto
     */
    public function setCalle($calle)
    {
        $this->calle = $calle;
    
        return $this;
    }

    /**
     * Get calle
     *
     * @return string 
     */
    public function getCalle()
    {
        return $this->calle;
    }

    /**
     * Set ciudad
     *
     * @param string $ciudad
     * @return Contacto
     */
    public function setCiudad($ciudad)
    {
        $this->ciudad = $ciudad;
    
        return $this;
    }

    /**
     * Get ciudad
     *
     * @return string 
     */
    public function getCiudad()
    {
        return $this->ciudad;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Contacto
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set celular
     *
     * @param string $celular
     * @return Contacto
     */
    public function setCelular($celular)
    {
        $this->celular = $celular;
    
        return $this;
    }

    /**
     * Get celular
     *
     * @return string 
     */
    public function getCelular()
    {
        return $this->celular;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     * @return Contacto
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;
    
        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Contacto
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;
    
        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set provincia
     *
     * @param string $provincia
     * @return Contacto
     */
    public function setProvincia($provincia)
    {
        $this->provincia = $provincia;
    
        return $this;
    }

    /**
     * Get provincia
     *
     * @return string 
     */
    public function getProvincia()
    {
        return $this->provincia;
    }
}