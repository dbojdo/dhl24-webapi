<?php
/**
 * File ShipmentEvent.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class ShipmentEvent
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/shipmentEvent.html
 */
class ShipmentEvent implements ShipmentEventInterface
{
    /**
     *
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $status;
    
    /**
     *
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $description;
    
    /**
     *
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $timestamp;
    
    /**
     *
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $terminal;
    
    /**
     * 
     * @param string $status
     * @param string $description
     * @param \DateTime $timestamp
     * @param string $terminal
     */
    public function __construct(
        $status = null, 
        $description = null, 
        \DateTime $timestamp = null, 
        $terminal = null
    ) {
        $this->setStatus($status);
        $this->setDescription($description);
        if ($timestamp) {
            $this->setTimestamp($timestamp);
        }  
        $this->setTerminal($terminal);
    }
    
    /**
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }
    
    /**
     *
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }
    
    /**
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    
    /**
     *
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }
    
    /**
     *
     * @return string
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }
    
    /**
     *
     * @param string $timestamp
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;
    }
    
    /**
     *
     * @return string
     */
    public function getTerminal()
    {
        return $this->terminal;
    }
    
    /**
     *
     * @param string $terminal
     */
    public function setTerminal($terminal)
    {
        $this->terminal = $terminal;
    }
}
