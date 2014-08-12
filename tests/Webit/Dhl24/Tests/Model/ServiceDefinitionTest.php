<?php
/**
 * File ServiceDefinitionTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\ServiceDefinition;

/**
 * 
 * Class ServiceDefinitionTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class ServiceDefinitionTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetter()
    {
        $data = $this->getData();
        
        $serviceDefinition = new ServiceDefinition(
	       $data['product'],
           $data['deliveryEvening'],
           $data['deliverySaturday'],
           $data['collectOnDelivery'],
           $data['collectOnDeliveryValue'],
           $data['collectOnDeliveryForm'],
           $data['collectOnDeliveryReference'],
           $data['insurance'],
           $data['insuranceValue'],
           $data['returnOnDelivery'],
           $data['returnOnDeliveryReference'],
           $data['proofOfDelivery'],
           $data['selfCollect'],
           $data['predeliveryInformation'],
           $data['preaviso']
        );
        
        $this->checkData($serviceDefinition, $data);
    }
    
    public function testSetterAndGetter()
    {
        $data = $this->getData();
        
        $serviceDefinition = new ServiceDefinition();
        $serviceDefinition->setProduct($data['product']);
        $serviceDefinition->setDeliveryEvening($data['deliveryEvening']);
        $serviceDefinition->setDeliverySaturday($data['deliverySaturday']);
        $serviceDefinition->setCollectOnDelivery($data['collectOnDelivery']);
        $serviceDefinition->setCollectOnDeliveryValue($data['collectOnDeliveryValue']);
        $serviceDefinition->setCollectOnDeliveryForm($data['collectOnDeliveryForm']);
        $serviceDefinition->setCollectOnDeliveryReference($data['collectOnDeliveryReference']);
        $serviceDefinition->setInsurance($data['insurance']);
        $serviceDefinition->setInsuranceValue($data['insuranceValue']);
        $serviceDefinition->setReturnOnDelivery($data['returnOnDelivery']);
        $serviceDefinition->setReturnOnDeliveryReference($data['returnOnDeliveryReference']);
        $serviceDefinition->setProofOfDelivery($data['proofOfDelivery']);
        $serviceDefinition->setSelfCollect($data['selfCollect']);
        $serviceDefinition->setPredeliveryInformation($data['predeliveryInformation']);
        $serviceDefinition->setPreaviso($data['preaviso']);
        
        $this->checkData($serviceDefinition, $data);
    }
    
    /**
     * 
     * @param ServiceDefinition $serviceDefinition
     * @param array $data
     */
    private function checkData(ServiceDefinition $serviceDefinition, array $data)
    {
        $this->assertEquals($data['product'], $serviceDefinition->getProduct());
        $this->assertEquals($data['deliveryEvening'], $serviceDefinition->getDeliveryEvening());
        $this->assertEquals($data['deliverySaturday'], $serviceDefinition->getDeliverySaturday());
        $this->assertEquals($data['collectOnDelivery'], $serviceDefinition->getCollectOnDelivery());
        $this->assertEquals($data['collectOnDeliveryValue'], $serviceDefinition->getCollectOnDeliveryValue());
        $this->assertEquals($data['collectOnDeliveryForm'], $serviceDefinition->getCollectOnDeliveryForm());
        $this->assertEquals($data['collectOnDeliveryReference'], $serviceDefinition->getCollectOnDeliveryReference());
        $this->assertEquals($data['insurance'], $serviceDefinition->getInsurance());
        $this->assertEquals($data['insuranceValue'], $serviceDefinition->getInsuranceValue());
        $this->assertEquals($data['returnOnDelivery'], $serviceDefinition->getReturnOnDelivery());
        $this->assertEquals($data['returnOnDeliveryReference'], $serviceDefinition->getReturnOnDeliveryReference());
        $this->assertEquals($data['proofOfDelivery'], $serviceDefinition->getProofOfDelivery());
        $this->assertEquals($data['selfCollect'], $serviceDefinition->getSelfCollect());
        $this->assertEquals($data['predeliveryInformation'], $serviceDefinition->getPredeliveryInformation());
        $this->assertEquals($data['preaviso'], $serviceDefinition->getPreaviso());
    }
    
    /**
     * 
     * @return array
     */
    private function getData()
    {
        $data = array(
        	'product' => 'AH',
            'deliveryEvening' => true,
            'deliverySaturday' => true,
            'collectOnDelivery' => true,
            'collectOnDeliveryValue' => 100.21,
            'collectOnDeliveryForm' => 'cash',
            'collectOnDeliveryReference' => 'COD Ref',
            'insurance' => true,
            'insuranceValue' => 50.99,
            'returnOnDelivery' => true,
            'returnOnDeliveryReference' => 'Return Ref',
            'proofOfDelivery' => true,
            'selfCollect' => true,
            'predeliveryInformation' => true,
            'preaviso' => true
        );
        
        return $data;
    }
}
