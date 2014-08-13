<?php
/**
 * File ShipmentEventTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\ShipmentEvent;
/**
 * 
 * Class ShipmentEventTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class ShipmentEventTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetter()
    {
        $data = $this->getData();
        
        $shimpmentEvent = new ShipmentEvent(
            $data['status'], 
            $data['description'], 
            $data['timestamp'], 
            $data['terminal']
        );
        
        $this->checkData($data, $shimpmentEvent);
    }
    
    public function testSetterAndGetter()
    {
        $data = $this->getData();
    
        $shimpmentEvent = new ShipmentEvent();
        $shimpmentEvent->setStatus($data['status']);
        $shimpmentEvent->setDescription($data['description']);
        $shimpmentEvent->setTimestamp($data['timestamp']);
        $shimpmentEvent->setTerminal($data['terminal']);
        
        
        $this->checkData($data, $shimpmentEvent);
    }
    
    private function checkData($data, ShipmentEvent $shipmentEvent)
    {
        $this->assertEquals($data['status'], $shipmentEvent->getStatus());
        $this->assertEquals($data['description'], $shipmentEvent->getDescription());
        $this->assertEquals($data['timestamp'], $shipmentEvent->getTimestamp());
        $this->assertEquals($data['terminal'], $shipmentEvent->getTerminal());
    }
    
    /**
     * 
     * @return array
     */
    private function getData()
    {
        $data = array(
        	'status' => 'My Name',
            'description' => '32322',
            'timestamp' => new \DateTime(),
            'terminal' => 'Terminal #4'
        );
        
        return $data;
    }
}
