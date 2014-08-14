<?php
/**
 * File ShipmentBasicDataInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Interface ShipmentBasicDataInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/shipmentBasicData.html
 */
interface ShipmentBasicDataInterface
{
    
    /**
     * @return int
     */
    public function getShipmentId();
    
    /**
     * 
     * @param int $shipmentId
     */
    public function setShipmentId($shipmentId);
    
    /**
     * @return \DateTime
     */
    public function getCreated();
    
    /**
     * 
     * @param \DateTime $created
     */
    public function setCreated(\DateTime $created);
    
    /**
     * @return AddressInterface
     */
    public function getShipper();
    
    /**
     * 
     * @param AddressInterface $shipper
     */
    public function setShipper(AddressInterface $shipper);
    
    /**
     * @return AddressInterface
     */
    public function getReceiver();
    
    /**
     * 
     * @param AddressInterface $receiver
     */
    public function setReceiver(AddressInterface $receiver);
    
    /**
     * @return string
     */
    public function getOrderStatus();
    
    /**
     * 
     * @param string $orderStatus
     */
    public function setOrderStatus($status);
}
