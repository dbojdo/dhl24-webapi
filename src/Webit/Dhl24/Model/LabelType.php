<?php
/**
 * File LabelType.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class LabelType
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/itemToPrint.html
 */
class LabelType
{
   const LP = 'LP';
   const BLP = 'BLP';
   const ZBLP = 'ZBLP';
   
   private function __construct() {}
   
   public static function getTypes()
   {
       $refClass = new \ReflectionClass(get_class());
       $constants = $refClass->getConstants();
       
       return array_values($constants);
   }
}
