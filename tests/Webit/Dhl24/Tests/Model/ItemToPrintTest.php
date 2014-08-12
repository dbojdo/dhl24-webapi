<?php
/**
 * File ItemToPrintTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\ItemToPrint;
/**
 * 
 * Class ItemToPrintTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class ItemToPrintTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetter()
    {
        $data = $this->getData();
        
        $itemToPrint = new ItemToPrint(
            $data['labelType'],
            $data['shipmentId']
        );
        
        $this->checkData($itemToPrint, $data);
    }
    
    public function testSetterAndGetter()
    {
        $data = $this->getData();
        
        $itemToPrint = new ItemToPrint();
        $itemToPrint->setLabelType($data['labelType']);
        $itemToPrint->setShipmentId($data['shipmentId']);
        
        $this->checkData($itemToPrint, $data);
    }
    
    private function checkData(ItemToPrint $itemToPrint, array $data)
    {
        $this->assertEquals($data['labelType'], $itemToPrint->getLabelType());
        $this->assertEquals($data['shipmentId'], $itemToPrint->getShipmentId());
    }
    
    /**
     * 
     * @return array
     */
    private function getData()
    {
        $data = array(
        	'labelType' => 'LP',
            'shipmentId' => 999,
        );
        
        return $data;
    }
}
