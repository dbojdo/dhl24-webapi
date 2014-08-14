<?php
/**
 * File ShipmentFullDataTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\ShipmentFullData;
/**
 * 
 * Class ShipmentFullDataTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class ShipmentFullDataTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetter()
    {
        $data = $this->getData();
        
        $shimpmentFullData = new ShipmentFullData(
            $data['shipper'], 
            $data['receiver'], 
            $data['pieceList'], 
            $data['payment'],
            $data['service'],
            $data['shipmentDate'],
            $data['comment'],
            $data['content'],
            $data['reference'],
            $data['shipmentId'],
            $data['created'],
            $data['orderStatus']
        );
        
        $this->checkData($data, $shimpmentFullData);
    }
    
    public function testSetterAndGetter()
    {
        $data = $this->getData();
    
        $shimpmentFullData = new ShipmentFullData();
        $shimpmentFullData->setShipper($data['shipper']);
        $shimpmentFullData->setReceiver($data['receiver']);
        $shimpmentFullData->setPieceList($data['pieceList']);
        $shimpmentFullData->setPayment($data['payment']);
        $shimpmentFullData->setService($data['service']);
        $shimpmentFullData->setShipmentDate($data['shipmentDate']);
        $shimpmentFullData->setComment($data['comment']);
        $shimpmentFullData->setContent($data['content']);
        $shimpmentFullData->setReference($data['reference']);
        $shimpmentFullData->setShipmentId($data['shipmentId']);
        $shimpmentFullData->setCreated($data['created']);
        $shimpmentFullData->setOrderStatus($data['orderStatus']);
        
        $this->checkData($data, $shimpmentFullData);
    }
    
    public function testAddPieceDefinition()
    {
        $data = array(
        	$this->getMock('Webit\Dhl24\Model\PieceDefinitionInterface'),
            $this->getMock('Webit\Dhl24\Model\PieceDefinitionInterface')
        );
        
        $shimpmentFullData = new ShipmentFullData();
        
        foreach ($data as $pieceDefinition) {
            $shimpmentFullData->addPieceDefinition($pieceDefinition);
        }
        
        $this->assertEquals($data, $shimpmentFullData->getpieceList());
    }
    
    private function checkData($data, ShipmentFullData $shipmentBasicData)
    {
        $this->assertEquals($data['shipper'], $shipmentBasicData->getShipper());
        $this->assertEquals($data['receiver'], $shipmentBasicData->getReceiver());
        $this->assertEquals($data['pieceList'], $shipmentBasicData->getPieceList());
        $this->assertEquals($data['payment'], $shipmentBasicData->getPayment());
        $this->assertEquals($data['service'], $shipmentBasicData->getService());
        $this->assertEquals($data['shipmentDate'], $shipmentBasicData->getShipmentDate());
        $this->assertEquals($data['comment'], $shipmentBasicData->getComment());
        $this->assertEquals($data['content'], $shipmentBasicData->getContent());
        $this->assertEquals($data['reference'], $shipmentBasicData->getReference());
        $this->assertEquals($data['shipmentId'], $shipmentBasicData->getShipmentId());
        $this->assertEquals($data['created'], $shipmentBasicData->getCreated());
        $this->assertEquals($data['orderStatus'], $shipmentBasicData->getOrderStatus());
    }
    
    /**
     * 
     * @return array
     */
    private function getData()
    {
        $data = array(
            'shipper' => $this->getMock('Webit\Dhl24\Model\AddressInterface'),
            'receiver' => $this->getMock('Webit\Dhl24\Model\AddressInterface'),
            'pieceList' => array(
        	   $this->getMock('Webit\Dhl24\Model\PieceDefinitionInterface'),
               $this->getMock('Webit\Dhl24\Model\PieceDefinitionInterface')
            ),
            'payment' => $this->getMock('Webit\Dhl24\Model\PaymentDataInterface'),
            'service' => $this->getMock('Webit\Dhl24\Model\ServiceDefinitionInterface'),
            'shipmentDate' => new \DateTime(),
            'comment' => 'Comment...',
            'content' => 'Content...',
            'reference' => 'Reference...',
        	'shipmentId' => 32322,
            'created' => new \DateTime(),
            'orderStatus' => 'Order Status'
        );
        
        return $data;
    }
}
