<?php
/**
 * File ShipmentFullDataInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Interface ShipmentFullDataInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/shipmentFullData.html
 */
interface ShipmentFullDataInterface
{

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
     * @return array
     */
    public function getPieceList();
    
    /**
     * 
     * @param array $pieceList
     */
    public function setPieceList(array $pieceList);
    
    /**
     * 
     * @param PieceDefinitionInterface $pieceDefinition
     */
    public function addPieceDefinition(PieceDefinitionInterface $pieceDefinition);
    
    /**
     * @return PaymentDataInterface
     */
    public function getPayment();
    
    /**
     * 
     * @param PaymentDataInterface $payment
     */
    public function setPayment(PaymentDataInterface $payment);
    
    /**
     * @return string
     */
    public function getComment();
    
    /**
     * 
     * @param string $comment
     */
    public function setComment($comment);
    
    /**
     * @return string
     */
    public function getContent();
    
    /**
     * 
     * @param string $content
     */
    public function setContent($content);
    
    /**
     * @return string
     */
    public function getReference();
    
    /**
     * 
     * @param string $reference
     */
    public function setReference($reference);
    
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
     * @return string
     */
    public function getOrderStatus();
    
    /**
     * 
     * @param string $orderStatus
     */
    public function setOrderStatus($status);
}
