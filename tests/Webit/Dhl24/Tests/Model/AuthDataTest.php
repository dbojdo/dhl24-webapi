<?php
/**
 * File AuthDataTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\AuthData;

/**
 * 
 * Class AuthDataTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class AuthDataTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetter()
    {
        $data = $this->getData();
        
        $authData = new AuthData($data['username'], $data['password']);
        
        $this->assertEquals($data['username'], $authData->getUsername());
        $this->assertEquals($data['password'], $authData->getPassword());
    }
    
    public function testSetterAndGetter()
    {
        $data = $this->getData();
        
        $authData = new AuthData();
        $authData->setUsername($data['username']);
        $authData->setPassword($data['password']);
        
        $this->assertEquals($data['username'], $authData->getUsername());
        $this->assertEquals($data['password'], $authData->getPassword());
    }
    
    /**
     * 
     * @return array
     */
    private function getData()
    {
        $data = array(
        	'username' => 'My Username',
            'password' => 'my-password'
        );
        
        return $data;
    }
}
