<?php
/**
 * File PayerTypeTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\PayerType;

/**
 * 
 * Class PayerTypeTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class PayerTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTypes()
    {
        $types = PayerType::getTypes();
        $this->assertInternalType('array', $types);
    }
}
