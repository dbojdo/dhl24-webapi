<?php
/**
 * File LabelTypeTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\LabelType;
/**
 * 
 * Class LabelTypeTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class LabelTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTypes()
    {
        $types = LabelType::getTypes();
        $this->assertInternalType('array', $types);
    }
}
