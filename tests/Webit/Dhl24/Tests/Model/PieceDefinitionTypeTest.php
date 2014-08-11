<?php
/**
 * File PieceDefinitionTypeTest.php
 * 
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 * 
 */
namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\AuthData;
use Webit\Dhl24\Model\PieceDefintion;
use Webit\Dhl24\Model\PieceDefintionType;

/**
 * 
 * Class PieceDefinitionTypeTest
 * @package Webit\Dhl24\Tests\Model
 *
 */
class PieceDefinitionTypeTest extends \PHPUnit_Framework_TestCase
{
    public function testGetTypes()
    {
        $types = PieceDefintionType::getTypes();
        $this->assertInternalType('array', $types);
    }
}
