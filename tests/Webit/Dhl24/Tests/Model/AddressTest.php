<?php
/**
 * File AddresstTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;


use Webit\Dhl24\Model\Address;
/**
 * 
 * Class AddressTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class AddressTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetter()
    {
        $data = $this->getData();
        
        $address = new Address(
            $data['name'], 
            $data['postalCode'], 
            $data['city'], 
            $data['street'],
            $data['houseNumber'],
            $data['apartmentNumber'],
            $data['contactPerson'],
            $data['contactPhone'],
            $data['contactEmail']
        );
        
        $this->checkData($data, $address);
    }
    
    public function testSetterAndGetter()
    {
        $data = $this->getData();
    
        $address = new Address();
        $address->setName($data['name']);
        $address->setPostalCode($data['postalCode']);
        $address->setCity($data['city']);
        $address->setStreet($data['street']);
        $address->setHouseNumber($data['houseNumber']);
        $address->setApartmentNumber($data['apartmentNumber']);
        $address->setContactPerson($data['contactPerson']);
        $address->setContactPhone($data['contactPhone']);
        $address->setContactEmail($data['contactEmail']);
        
        $this->checkData($data, $address);
    }
    
    private function checkData($data, Address $address)
    {
        $this->assertEquals($data['name'], $address->getName());
        $this->assertEquals($data['postalCode'], $address->getPostalCode());
        $this->assertEquals($data['city'], $address->getCity());
        $this->assertEquals($data['street'], $address->getStreet());
        $this->assertEquals($data['houseNumber'], $address->getHouseNumber());
        $this->assertEquals($data['apartmentNumber'], $address->getApartmentNumber());
        $this->assertEquals($data['contactPerson'], $address->getContactPerson());
        $this->assertEquals($data['contactPhone'], $address->getContactPhone());
        $this->assertEquals($data['contactEmail'], $address->getContactEmail());
    }
    
    /**
     * 
     * @return array
     */
    private function getData()
    {
        $data = array(
        	'name' => 'My Name',
            'postalCode' => '32322',
            'city' => 'City Name',
            'street' => 'Street Name',
            'houseNumber' => '#232',
            'apartmentNumber' => '12B',
            'contactPerson' => 'Name Lastname',
            'contactPhone' => '+48544234698',
            'contactEmail' => 'email@address.com'
        );
        
        return $data;
    }
}
