<?php

namespace Proxies\__CG__\Alivinatu\AlivinatuBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Promocion extends \Alivinatu\AlivinatuBundle\Entity\Promocion implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setDescripcion($descripcion)
    {
        $this->__load();
        return parent::setDescripcion($descripcion);
    }

    public function getDescripcion()
    {
        $this->__load();
        return parent::getDescripcion();
    }

    public function setNombrePromocion($nombrePromocion)
    {
        $this->__load();
        return parent::setNombrePromocion($nombrePromocion);
    }

    public function getNombrePromocion()
    {
        $this->__load();
        return parent::getNombrePromocion();
    }

    public function setDescuento($descuento)
    {
        $this->__load();
        return parent::setDescuento($descuento);
    }

    public function getDescuento()
    {
        $this->__load();
        return parent::getDescuento();
    }

    public function addServicio(\Alivinatu\AlivinatuBundle\Entity\Servicio $servicios)
    {
        $this->__load();
        return parent::addServicio($servicios);
    }

    public function removeServicio(\Alivinatu\AlivinatuBundle\Entity\Servicio $servicios)
    {
        $this->__load();
        return parent::removeServicio($servicios);
    }

    public function getServicios()
    {
        $this->__load();
        return parent::getServicios();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'descripcion', 'descuento', 'nombrePromocion', 'servicios');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}