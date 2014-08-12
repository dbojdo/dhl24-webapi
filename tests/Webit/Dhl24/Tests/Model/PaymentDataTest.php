<?php
/**
 * File PaymentDataTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\PaymentData;
/**
 * 
 * Class PaymentDataTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class PaymentDataTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetter()
    {
        $data = $this->getData();
        
        $paymentData = new PaymentData(
            $data['paymentMethod'],
            $data['payerType'],
            $data['accountNumber'],
            $data['costsCenter']
        );
        
        $this->checkData($paymentData, $data);
    }
    
    public function testSetterAndGetter()
    {
        $data = $this->getData();
        
        $paymentData = new PaymentData();
        $paymentData->setPaymentMethod($data['paymentMethod']);
        $paymentData->setPayerType($data['payerType']);
        $paymentData->setAccountNumber($data['accountNumber']);
        $paymentData->setCostsCenter($data['costsCenter']);
        
        $this->checkData($paymentData, $data);
    }
    
    private function checkData(PaymentData $paymentData, array $data)
    {
        $this->assertEquals($data['paymentMethod'], $paymentData->getPaymentMethod());
        $this->assertEquals($data['payerType'], $paymentData->getPayerType());
        $this->assertEquals($data['accountNumber'], $paymentData->getAccountNumber());
        $this->assertEquals($data['costsCenter'], $paymentData->getCostsCenter());
    }
    
    /**
     * 
     * @return array
     */
    private function getData()
    {
        $data = array(
        	'paymentMethod' => 'CASH',
            'payerType' => 'SHIPPER',
            'accountNumber' => 'rs22433',
            'costsCenter' => '23rfdfvdfgsdf44'
        );
        
        return $data;
    }
}
