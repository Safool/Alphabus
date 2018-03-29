<?php

namespace Proxies\__CG__\My\AlphabusBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Affectation extends \My\AlphabusBundle\Entity\Affectation implements \Doctrine\ORM\Proxy\Proxy
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
    public static $lazyPropertiesDefaults = array();



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
            return array('__isInitialized__', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'id', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'seriealpha', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'dateaffectation', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'controleacier', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'dateacier', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'controlepeinture', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'datepeinture', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'controlcontroler', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'datecontrole', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'controleessai', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'dateessai', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'nclients', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'chassis');
        }

        return array('__isInitialized__', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'id', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'seriealpha', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'dateaffectation', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'controleacier', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'dateacier', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'controlepeinture', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'datepeinture', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'controlcontroler', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'datecontrole', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'controleessai', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'dateessai', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'nclients', '' . "\0" . 'My\\AlphabusBundle\\Entity\\Affectation' . "\0" . 'chassis');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Affectation $proxy) {
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
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
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
    public function getNclients()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNclients', array());

        return parent::getNclients();
    }

    /**
     * {@inheritDoc}
     */
    public function setNclients($nclients)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNclients', array($nclients));

        return parent::setNclients($nclients);
    }

    /**
     * {@inheritDoc}
     */
    public function getChassis()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getChassis', array());

        return parent::getChassis();
    }

    /**
     * {@inheritDoc}
     */
    public function setChassis($chassis)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setChassis', array($chassis));

        return parent::setChassis($chassis);
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setSeriealpha($seriealpha)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setSeriealpha', array($seriealpha));

        return parent::setSeriealpha($seriealpha);
    }

    /**
     * {@inheritDoc}
     */
    public function getSeriealpha()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getSeriealpha', array());

        return parent::getSeriealpha();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateaffectation($dateaffectation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateaffectation', array($dateaffectation));

        return parent::setDateaffectation($dateaffectation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateaffectation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateaffectation', array());

        return parent::getDateaffectation();
    }

    /**
     * {@inheritDoc}
     */
    public function setControleacier($controleacier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setControleacier', array($controleacier));

        return parent::setControleacier($controleacier);
    }

    /**
     * {@inheritDoc}
     */
    public function getControleacier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getControleacier', array());

        return parent::getControleacier();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateacier($dateacier)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateacier', array($dateacier));

        return parent::setDateacier($dateacier);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateacier()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateacier', array());

        return parent::getDateacier();
    }

    /**
     * {@inheritDoc}
     */
    public function setControlepeinture($controlepeinture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setControlepeinture', array($controlepeinture));

        return parent::setControlepeinture($controlepeinture);
    }

    /**
     * {@inheritDoc}
     */
    public function getControlepeinture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getControlepeinture', array());

        return parent::getControlepeinture();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatepeinture($datepeinture)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatepeinture', array($datepeinture));

        return parent::setDatepeinture($datepeinture);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatepeinture()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatepeinture', array());

        return parent::getDatepeinture();
    }

    /**
     * {@inheritDoc}
     */
    public function setControlcontroler($controlcontroler)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setControlcontroler', array($controlcontroler));

        return parent::setControlcontroler($controlcontroler);
    }

    /**
     * {@inheritDoc}
     */
    public function getControlcontroler()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getControlcontroler', array());

        return parent::getControlcontroler();
    }

    /**
     * {@inheritDoc}
     */
    public function setDatecontrole($datecontrole)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDatecontrole', array($datecontrole));

        return parent::setDatecontrole($datecontrole);
    }

    /**
     * {@inheritDoc}
     */
    public function getDatecontrole()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDatecontrole', array());

        return parent::getDatecontrole();
    }

    /**
     * {@inheritDoc}
     */
    public function setControleessai($controleessai)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setControleessai', array($controleessai));

        return parent::setControleessai($controleessai);
    }

    /**
     * {@inheritDoc}
     */
    public function getControleessai()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getControleessai', array());

        return parent::getControleessai();
    }

    /**
     * {@inheritDoc}
     */
    public function setDateessai($dateessai)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDateessai', array($dateessai));

        return parent::setDateessai($dateessai);
    }

    /**
     * {@inheritDoc}
     */
    public function getDateessai()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDateessai', array());

        return parent::getDateessai();
    }

}
