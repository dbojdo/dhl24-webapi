<?php
/**
 * File ServiceDefinitionProduct.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class ServiceDefinitionProduct
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/serviceDefinition.html
 */
class ServiceDefinitionProduct
{
   const DOMESTIC = 'AH';
   const DOMESTIC_09 = '09';
   const DOMESTIC_12 = '12';
   
   private function __construct() {}
   
   public static function getProducts()
   {
       $refClass = new \ReflectionClass(get_class());
       $constants = $refClass->getConstants();
       
       return array_values($constants);
   }
}
