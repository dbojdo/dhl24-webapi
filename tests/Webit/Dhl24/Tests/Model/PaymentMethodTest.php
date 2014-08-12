<?php
/**
 * File PaymentMethodTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\PaymentMethod;

/**
 * 
 * Class PaymentMethodTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class PaymentMethodTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTypes()
    {
        $methods = PaymentMethod::getMethods();
        $this->assertInternalType('array', $methods);
    }
}
