<?php

namespace Alivinatu\AlivinatuBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Alivinatu\AlivinatuBundle\Validator\CI;


/**
 * Alivinatu\AlivinatuBundle\Entity\Usuario
 *
 * @ORM\Table(name="usuario")
 * @ORM\Entity(repositoryClass="Alivinatu\AlivinatuBundle\Entity\UsuarioRepository")
 *
 * @ORM\InheritanceType("JOINED")
 * @ORM\DiscriminatorColumn(name="discr", type="string")
 * @ORM\DiscriminatorMap({"usua" = "Usuario", "cli" = "Cliente", "admin" = "Administrador"})
 */

class Usuario implements UserInterface
{
    /**
     * @ORM\OneToOne(targetEntity="Contacto", cascade={"persist", "remove"})
     * @ORM\JoinColumn(name="contacto_id", referencedColumnName="id")
     */
    private $contacto;
    
    
    
    
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Assert\NotBlank()
     */
    private $id;

    /**
     * @var string $apellido
     *
     * @ORM\Column(name="apellido", type="string")
     * @Assert\NotBlank()
     * @Assert\MinLength(4)
     * @Assert\MaxLength(12)
     */
    private $apellido;

    /**
     * @var string $cedula
     *
     * @ORM\Column(name="cedula", type="string")
     * @Assert\NotBlank()
     * @Assert\MinLength(10)
     * @Assert\MaxLength(10)
     * @CI()
     */
    private $cedula;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string")
     * @Assert\NotBlank()
     * @Assert\MinLength(5)
     * @Assert\MaxLength(15)
     */
    private $password;

    /**
     * @var string $fNacimiento
     *
     * @ORM\Column(name="fNacimiento", type="string")
     * @Assert\NotBlank()
     */
    private $fNacimiento;

    /**
     * @var string $genero
     *
     * @ORM\Column(name="genero", type="string", length=1)
     * @Assert\NotBlank()
     */
    private $genero;

    /**
     * @var string $nombre
     *
     * @ORM\Column(name="nombre", type="string")
     * @Assert\NotBlank()
     * @Assert\MinLength(4)
     * @Assert\MaxLength(12)
     */
    private $nombre;

    /**
     * @var string $usuario
     *
     * @ORM\Column(name="usuario", type="string")
     * @Assert\NotBlank()
     * @Assert\MinLength(5)
     * @Assert\MaxLength(12)
     */
    private $usuario;
    
    /**
     * @var string $rol
     *
     * @ORM\Column(name="rol", type="string")
     * @Assert\NotBlank()
     */
    private $rol;


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
     * Set apellido
     *
     * @param string $apellido
     * @return Usuario
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;
    
        return $this;
    }

    /**
     * Get apellido
     * 
     * @return string 
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set cedula
     *
     * @param string $cedula
     * @return Usuario
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;
    
        return $this;
    }

    /**
     * Get cedula
     *
     * @return string 
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set fNacimiento
     *
     * @param \DateTime $fNacimiento
     * @return Usuario
     */
    public function setFNacimiento($fNacimiento)
    {
        $this->fNacimiento = $fNacimiento;
    
        return $this;
    }

    /**
     * Get fNacimiento
     *
     * @return \DateTime 
     */
    public function getFNacimiento()
    {
        return $this->fNacimiento;
    }

    /**
     * Set genero
     *
     * @param string $genero
     * @return Usuario
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
    
        return $this;
    }

    /**
     * Get genero
     *
     * @return string 
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Usuario
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
     * Set usuario
     *
     * @param string $usuario
     * @return Usuario
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;
    
        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }
    
    /**
     * Set roles
     *
     * @param string $roles
     * @return Usuario
     */
    public function setRol($rol)
    {
        $this->rol = $rol;
    
        return $this;
    }
    
    /**
     * Get usuario
     *
     * @return string 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Get roles
     *
     * @return string 
     */
    public function getRoles()
    {
        return $this->rol;
    }

    
    
    
    public function eraseCredentials() {
        return false;
    }


    public function getSalt() {
        return false;
    }

    public function getUsername() {
        return $this->usuario;
    }
    
    public function equals(UserInterface $user)
    {
        return $user->getUsername() == $this->getUsername();
    }

    

    /**
     * Set contacto
     *
     * @param Alivinatu\AlivinatuBundle\Entity\Contacto $contacto
     * @return Usuario
     */
    public function setContacto(\Alivinatu\AlivinatuBundle\Entity\Contacto $contacto = null)
    {
        $this->contacto = $contacto;
    
        return $this;
    }

    /**
     * Get contacto
     *
     * @return Alivinatu\AlivinatuBundle\Entity\Contacto 
     */
    public function getContacto()
    {
        return $this->contacto;
    }
}