<?php

namespace Proxies\__CG__\WebServiceBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \WebServiceBundle\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'adresse', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'distanceInit', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'created', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'updated', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'service', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'societe', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'typeUser', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'ville'];
        }

        return ['__isInitialized__', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'id', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'nom', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'prenom', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'adresse', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'distanceInit', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'created', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'updated', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'service', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'societe', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'typeUser', '' . "\0" . 'WebServiceBundle\\Entity\\User' . "\0" . 'ville'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setNom($nom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNom', [$nom]);

        return parent::setNom($nom);
    }

    /**
     * {@inheritDoc}
     */
    public function getNom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNom', []);

        return parent::getNom();
    }

    /**
     * {@inheritDoc}
     */
    public function setPrenom($prenom)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPrenom', [$prenom]);

        return parent::setPrenom($prenom);
    }

    /**
     * {@inheritDoc}
     */
    public function getPrenom()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPrenom', []);

        return parent::getPrenom();
    }

    /**
     * {@inheritDoc}
     */
    public function setAdresse($adresse)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAdresse', [$adresse]);

        return parent::setAdresse($adresse);
    }

    /**
     * {@inheritDoc}
     */
    public function getAdresse()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAdresse', []);

        return parent::getAdresse();
    }

    /**
     * {@inheritDoc}
     */
    public function setDistanceInit($distanceInit)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDistanceInit', [$distanceInit]);

        return parent::setDistanceInit($distanceInit);
    }

    /**
     * {@inheritDoc}
     */
    public function getDistanceInit()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDistanceInit', []);

        return parent::getDistanceInit();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreated($created)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreated', [$created]);

        return parent::setCreated($created);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreated', []);

        return parent::getCreated();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdated($updated)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdated', [$updated]);

        return parent::setUpdated($updated);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdated()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdated', []);

        return parent::getUpdated();
    }

    /**
     * {@inheritDoc}
     */
    public function setService(\WebServiceBundle\Entity\Service $service = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setService', [$service]);

        return parent::setService($service);
    }

    /**
     * {@inheritDoc}
     */
    public function getService()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getService', []);

        return parent::getService();
    }

    /**
     * {@inheritDoc}
     */
    public function setSociete(\WebServiceBundle\Entity\Societe $societe = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSociete', [$societe]);

        return parent::setSociete($societe);
    }

    /**
     * {@inheritDoc}
     */
    public function getSociete()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSociete', []);

        return parent::getSociete();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeUser(\WebServiceBundle\Entity\TypeUser $typeUser = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeUser', [$typeUser]);

        return parent::setTypeUser($typeUser);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeUser()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeUser', []);

        return parent::getTypeUser();
    }

    /**
     * {@inheritDoc}
     */
    public function setVille(\WebServiceBundle\Entity\Ville $ville = NULL)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setVille', [$ville]);

        return parent::setVille($ville);
    }

    /**
     * {@inheritDoc}
     */
    public function getVille()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getVille', []);

        return parent::getVille();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}
