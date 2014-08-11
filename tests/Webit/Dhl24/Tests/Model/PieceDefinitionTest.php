<?php
/**
 * File PieceDefinitionTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\AuthData;
use Webit\Dhl24\Model\PieceDefinition;

/**
 * 
 * Class PieceDefinitionTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class PieceDefinitionTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetter()
    {
        $data = $this->getData();
        
        $pieceDefinition = new PieceDefinition(
	       $data['type'],
           $data['width'],
           $data['heigth'],
           $data['length'],
           $data['weigth'],
           $data['quantity'],
           $data['nonStandard'],
           $data['blpPieceId']
        );
        
        $this->checkData($data, $pieceDefinition);
    }
    
    public function testSetterAndGetter()
    {
        $data = $this->getData();

        $pieceDefinition = new PieceDefinition();
        $pieceDefinition->setType($data['type']);
        $pieceDefinition->setWidth($data['width']);
        $pieceDefinition->setHeight($data['heigth']);
        $pieceDefinition->setLength($data['length']);
        $pieceDefinition->setWeigth($data['weigth']);
        $pieceDefinition->setQuantity($data['quantity']);
        $pieceDefinition->setNonStandard($data['nonStandard']);
        $pieceDefinition->setBlpPieceId($data['blpPieceId']);
        
        $this->checkData($data, $pieceDefinition);
    }
    
    private function checkData(array $data, PieceDefinition $pieceDefinition)
    {
        $this->assertEquals($data['type'], $pieceDefinition->getType());
        $this->assertEquals($data['width'], $pieceDefinition->getWidth($data['width']));
        $this->assertEquals($data['heigth'], $pieceDefinition->getHeight($data['heigth']));
        $this->assertEquals($data['length'], $pieceDefinition->getLength($data['length']));
        $this->assertEquals($data['weigth'], $pieceDefinition->getWeigth($data['weigth']));
        $this->assertEquals($data['quantity'], $pieceDefinition->getQuantity($data['quantity']));
        $this->assertEquals($data['nonStandard'], $pieceDefinition->getNonStandard($data['nonStandard']));
        $this->assertEquals($data['blpPieceId'], $pieceDefinition->getBlpPieceId($data['blpPieceId']));
    }
    
    /**
     * 
     * @return array
     */
    private function getData()
    {
        $data = array(
        	'type' => 'ENVELOPE',
            'width' => 55,
            'heigth' => 66,
            'length' => 77,
            'weigth' => 88,
            'quantity' => 12,
            'nonStandard' => true,
            'blpPieceId' => '354fsdffdse56654565'
        );
        
        return $data;
    }
}
