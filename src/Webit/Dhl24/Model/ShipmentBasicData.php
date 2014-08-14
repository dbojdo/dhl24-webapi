<?php
/**
 * File ShipmentBasicData.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 *
 * Class ShipmentBasicData
 * 
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/shipmentBasicData.html
 */
class ShipmentBasicData implements ShipmentBasicDataInterface
{

    /**
     *
     * @var int 
     * @DHL\Int
     * @DHL\Required
     */
    protected $shipmentId;

    /**
     *
     * @var \DateTime 
     * @DHL\DateTime
     * @DHL\Required
     */
    protected $created;

    /**
     *
     * @var AddressInterface 
     * @DHL\Required
     */
    protected $shipper;

    /**
     *
     * @var AddressInterface 
     * @DHL\Required
     */
    protected $receiver;

    /**
     *
     * @var string 
     * @DHL\String
     * @DHL\Required
     */
    protected $orderStatus;

    /**
     * 
     * @param string $shipmentId
     * @param \DateTime $created
     * @param AddressInterface $shipper
     * @param AddressInterface $receiver
     * @param string $orderStatus
     */
    public function __construct(
	   $shipmentId = null,
       \DateTime $created = null,
       AddressInterface $shipper = null,
       AddressInterface $receiver = null,
       $orderStatus = null
    ) {
        $this->setShipmentId($shipmentId);
        if ($created) {
            $this->setCreated($created);
        }
        
        if ($shipper) {
            $this->setShipper($shipper);
        }
        
        if ($receiver) {
            $this->setReceiver($receiver);
        }
        
        $this->setOrderStatus($orderStatus);
    }
    
    /**
     *
     * @return int
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    /**
     *
     * @param int $shipmentId
     */
    public function setShipmentId($shipmentId)
    {
        $this->shipmentId = $shipmentId;
    }

    /**
     *
     * @return DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     *
     * @param \DateTime $created            
     */
    public function setCreated(\DateTime $created)
    {
        $this->created = $created;
    }

    /**
     *
     * @return AddressInterface
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     *
     * @param AddressInterface $shipper            
     */
    public function setShipper(AddressInterface $shipper)
    {
        $this->shipper = $shipper;
    }

    /**
     *
     * @return AddressInterface
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     *
     * @param AddressInterface $receiver            
     */
    public function setReceiver(AddressInterface $receiver)
    {
        $this->receiver = $receiver;
    }

    /**
     *
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     *
     * @param string $orderStatus
     */
    public function setOrderStatus($orderStatus)
    {
        $this->orderStatus = $orderStatus;
    }
}
