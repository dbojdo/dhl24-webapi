<?php
/**
 * File ShipmentBasicDataTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\ShipmentBasicData;

/**
 * 
 * Class ShipmentBasicDataTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class ShipmentBasicDataTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetter()
    {
        $data = $this->getData();
        
        $shimpmentBasicData = new ShipmentBasicData(
            $data['shipmentId'], 
            $data['created'], 
            $data['shipper'], 
            $data['receiver'],
            $data['orderStatus']
        );
        
        $this->checkData($data, $shimpmentBasicData);
    }
    
    public function testSetterAndGetter()
    {
        $data = $this->getData();
    
        $shimpmentBasicData = new ShipmentBasicData();
        $shimpmentBasicData->setShipmentId($data['shipmentId']);
        $shimpmentBasicData->setCreated($data['created']);
        $shimpmentBasicData->setShipper($data['shipper']);
        $shimpmentBasicData->setReceiver($data['receiver']);
        $shimpmentBasicData->setOrderStatus($data['orderStatus']);
        
        $this->checkData($data, $shimpmentBasicData);
    }
    
    private function checkData($data, ShipmentBasicData $shipmentBasicData)
    {
        $this->assertEquals($data['shipmentId'], $shipmentBasicData->getShipmentId());
        $this->assertEquals($data['created'], $shipmentBasicData->getCreated());
        $this->assertEquals($data['shipper'], $shipmentBasicData->getShipper());
        $this->assertEquals($data['receiver'], $shipmentBasicData->getReceiver());
        $this->assertEquals($data['orderStatus'], $shipmentBasicData->getOrderStatus());
    }
    
    /**
     * 
     * @return array
     */
    private function getData()
    {
        $data = array(
        	'shipmentId' => 32322,
            'created' => new \DateTime(),
            'shipper' => $this->getMock('Webit\Dhl24\Model\AddressInterface'),
            'receiver' => $this->getMock('Webit\Dhl24\Model\AddressInterface'),
            'orderStatus' => 'Order Status'
        );
        
        return $data;
    }
}
