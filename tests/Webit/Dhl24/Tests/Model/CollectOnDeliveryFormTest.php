<?php
/**
 * File CollectOnDeliveryFormTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\CollectOnDeliveryForm;

/**
 * 
 * Class CollectOnDeliveryFormTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class CollectOnDeliveryFormTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTypes()
    {
        $forms = CollectOnDeliveryForm::getForms();
        $this->assertInternalType('array', $forms);
    }
}
