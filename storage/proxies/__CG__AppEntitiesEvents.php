<?php

namespace DoctrineProxies\__CG__\App\Entities;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Events extends \App\Entities\Events implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'id', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'eventName', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'eventHeading', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'description', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'thumb', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'eventLocation', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'eventDate', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'eventEndDate', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'deleted', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'isActive', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'createdAt', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'EventsAttachment'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'id', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'eventName', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'eventHeading', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'description', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'thumb', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'eventLocation', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'eventDate', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'eventEndDate', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'deleted', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'isActive', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'createdAt', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'updatedAt', '' . "\0" . 'App\\Entities\\Events' . "\0" . 'EventsAttachment'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Events $proxy) {
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
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', [$id]);

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventName()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventName', []);

        return parent::getEventName();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventName($eventName)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventName', [$eventName]);

        return parent::setEventName($eventName);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventHeading()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventHeading', []);

        return parent::getEventHeading();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventHeading($eventHeading)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventHeading', [$eventHeading]);

        return parent::setEventHeading($eventHeading);
    }

    /**
     * {@inheritDoc}
     */
    public function getDescription()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDescription', []);

        return parent::getDescription();
    }

    /**
     * {@inheritDoc}
     */
    public function setDescription($description)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDescription', [$description]);

        return parent::setDescription($description);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventLocation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventLocation', []);

        return parent::getEventLocation();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventLocation($eventLocation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventLocation', [$eventLocation]);

        return parent::setEventLocation($eventLocation);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventDate', []);

        return parent::getEventDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventDate($eventDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventDate', [$eventDate]);

        return parent::setEventDate($eventDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventEndDate()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventEndDate', []);

        return parent::getEventEndDate();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventEndDate($eventEndDate)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventEndDate', [$eventEndDate]);

        return parent::setEventEndDate($eventEndDate);
    }

    /**
     * {@inheritDoc}
     */
    public function getDeleted()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDeleted', []);

        return parent::getDeleted();
    }

    /**
     * {@inheritDoc}
     */
    public function setDeleted($deleted)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDeleted', [$deleted]);

        return parent::setDeleted($deleted);
    }

    /**
     * {@inheritDoc}
     */
    public function getisActive()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getisActive', []);

        return parent::getisActive();
    }

    /**
     * {@inheritDoc}
     */
    public function setIsActive($isActive)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setIsActive', [$isActive]);

        return parent::setIsActive($isActive);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', []);

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt($createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', [$createdAt]);

        return parent::setCreatedAt($createdAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', []);

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', [$updatedAt]);

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getEventsAttachment()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEventsAttachment', []);

        return parent::getEventsAttachment();
    }

    /**
     * {@inheritDoc}
     */
    public function setEventsAttachment($EventsAttachment)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEventsAttachment', [$EventsAttachment]);

        return parent::setEventsAttachment($EventsAttachment);
    }

    /**
     * {@inheritDoc}
     */
    public function getThumb()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getThumb', []);

        return parent::getThumb();
    }

    /**
     * {@inheritDoc}
     */
    public function setThumb($thumb)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setThumb', [$thumb]);

        return parent::setThumb($thumb);
    }

}
