<?php
/**
 * File ServiceDefinitionProductTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\ServiceDefinitionProduct;

/**
 * 
 * Class ServiceDefinitionProductTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class ServiceDefinitionProductTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTypes()
    {
        $products = ServiceDefinitionProduct::getProducts();
        $this->assertInternalType('array', $products);
    }
}
