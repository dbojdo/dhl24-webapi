<?php
/**
 * File PayerType.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class PayerType
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/paymentData.html
 */
final class PayerType
{
    const SHIPPER = 'SHIPPER';
    const RECEIVER  = 'RECEIVER';
    const USER  = 'USER';
    
    private function __construct() {}
    
    /**
     * 
     * @return array
     */
    public static function getTypes()
    {
        $refClass = new \ReflectionClass(get_class());
        $constants = $refClass->getConstants();
        
        return array_values($constants);
    }
}
