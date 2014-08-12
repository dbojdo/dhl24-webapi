<?php
/**
 * File ItemToPrintResponseTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\ItemToPrintResponse;

/**
 * 
 * Class ItemToPrintResponseTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class ItemToPrintResponseTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetter()
    {
        $data = $this->getData();
        
        $itemToPrintResponse = new ItemToPrintResponse(
            $data['shipmentId'],
            $data['labelType'],
            $data['labelData'],
            $data['labelMimeType']
        );
        
        $this->checkData($itemToPrintResponse, $data);
    }
    
    public function testSetterAndGetter()
    {
        $data = $this->getData();
        
        $itemToPrintResponse = new ItemToPrintResponse();
        $itemToPrintResponse->setShipmentId($data['shipmentId']);
        $itemToPrintResponse->setLabelType($data['labelType']);
        $itemToPrintResponse->setLabelData($data['labelData']);
        $itemToPrintResponse->setLabelMimeType($data['labelMimeType']);
        
        $this->checkData($itemToPrintResponse, $data);
    }
    
    private function checkData(ItemToPrintResponse $itemToPrintResponse, array $data)
    {
        $this->assertEquals($data['shipmentId'], $itemToPrintResponse->getShipmentId());
        $this->assertEquals($data['labelType'], $itemToPrintResponse->getLabelType());
        $this->assertEquals($data['labelData'], $itemToPrintResponse->getLabelData());
        $this->assertEquals($data['labelMimeType'], $itemToPrintResponse->getLabelMimeType());
    }
    
    /**
     * 
     * @return array
     */
    private function getData()
    {
        $data = array(
            'shipmentId' => 999,
        	'labelType' => 'LP',
            'labelData' => base64_encode('some funny data'),
            'labelMimeType' => 'application/pdf'
        );
        
        return $data;
    }
}
