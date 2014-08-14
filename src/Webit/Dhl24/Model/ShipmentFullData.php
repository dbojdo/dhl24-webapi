<?php
/**
 * File ShipmentFullData.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class ShipmentFullData
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/shipmentFullData.html
 */
class ShipmentFullData implements ShipmentFullDataInterface
{
    
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
     * @var array
     * @DHL\Array
     * @DHL\Required
     */
    protected $pieceList = array();
    
    /**
     *
     * @var PaymentDataInterface
     * @DHL\Required
     */
    protected $payment;
    
    /**
     *
     * @var ServiceDefinitionInterface
     * @DHL\Required
     */
    protected $service;
    
    /**
     * 
     * @var \DateTime
     * @DHL\DateTime
     * @DHL\Required
     */
    protected $shipmentDate;
    
    /**
     * 
     * @var string
     * @DHL\String
     */
    protected $comment;
    
    /**
     *
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $content;
    
    /**
     *
     * @var string
     * @DHL\String
     */
    protected $reference;
    
    /**
     *
     * @var int
     * @DHL\Int
     */
    protected $shipmentId;
    
    /**
     *
     * @var \DateTime
     * @DHL\DateTime
     */
    protected $created;
    
    /**
     *
     * @var string
     * @DHL\String
     */
    protected $orderStatus;

    public function __construct(
    	AddressInterface $shipper = null,
        AddressInterface $receiver = null,
        array $pieceList = array(),
        PaymentDataInterface $payment = null,
        ServiceDefinitionInterface $service = null,
        \DateTime $shipmentDate = null,
        $comment = null,
        $content = null,
        $reference = null,
        $shipmentId = null,
        \DateTime $created = null,
        $orderStatus = null
    ) {
        if ($shipper) {
            $this->setShipper($shipper);
        }
        
        if ($receiver) {
            $this->setReceiver($receiver);
        }
        
        $this->setPieceList($pieceList);
        
        if ($payment) {
            $this->setPayment($payment);
        }
        
        if ($service) {
            $this->setService($service);
        }
        
        if ($shipmentDate) {
            $this->setShipmentDate($shipmentDate);
        }
        
        $this->setComment($comment);
        $this->setContent($content);
        $this->setReference($reference);
        $this->setShipmentId($shipmentId);
        
        if ($created) {
            $this->setCreated($created);
        }
        
        $this->setOrderStatus($orderStatus);
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
     * @return array
     */
    public function getPieceList()
    {
        return $this->pieceList;
    }

    /**
     *
     * @param array $pieceList            
     */
    public function setPieceList(array $pieceList)
    {
        $this->pieceList = $pieceList;
    }

    /**
     * 
     * @param PieceDefinitionInterface $pieceDefinition
     */
    public function addPieceDefinition(PieceDefinitionInterface $pieceDefinition)
    {
        $this->pieceList[] = $pieceDefinition;
    }
    
    /**
     *
     * @return PaymentDataInterface
     */
    public function getPayment()
    {
        return $this->payment;
    }

    /**
     *
     * @param PaymentDataInterface $payment            
     */
    public function setPayment(PaymentDataInterface $payment)
    {
        $this->payment = $payment;
    }

    /**
     *
     * @return ServiceDefinitionInterface
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     *
     * @param ServiceDefinitionInterface $service            
     */
    public function setService(ServiceDefinitionInterface $service)
    {
        $this->service = $service;
    }

    /**
     *
     * @return \DateTime
     */
    public function getShipmentDate()
    {
        return $this->shipmentDate;
    }

    /**
     *
     * @param \DateTime $shipmentDate            
     */
    public function setShipmentDate(\DateTime $shipmentDate)
    {
        $this->shipmentDate = $shipmentDate;
    }

    /**
     *
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     *
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     *
     * @param string $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     *
     * @param string $reference
     */
    public function setReference($reference)
    {
        $this->reference = $reference;
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
     * @return \DateTime
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
