<?php
/**
 * File ShipmentEventInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Interface ShipmentEventInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/shipmentEvent.html
 */
interface ShipmentEventInterface
{

    /**
     * @return string
     */
    public function getStatus();
    
    /**
     *
     * @param string $status
    */
    public function setStatus($status);
    
    /**
     * @return string
    */
    public function getDescription();
    
    /**
     *
     * @param string $description
    */
    public function setDescription($description);
    
    /**
     * @return string
    */
    public function getTimestamp();
    
    /**
     *
     * @param string $timestamp
    */
    public function setTimestamp($timestamp);
    
    /**
     * @return string
    */
    public function getTerminal();
    
    /**
     *
     * @param string $terminal
    */
    public function setTerminal($terminal);   
}
