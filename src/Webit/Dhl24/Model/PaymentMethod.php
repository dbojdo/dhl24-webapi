<?php
/**
 * File PaymentMethod.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class PaymentMethod
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/paymentData.html
 */
final class PaymentMethod
{
    const CASH = 'CASH';
    const BANK_TRANSFER  = 'BANK_TRANSFER';
    
    private function __construct() {}
    
    /**
     * 
     * @return array
     */
    public static function getMethods()
    {
        $refClass = new \ReflectionClass(get_class());
        $constants = $refClass->getConstants();
        
        return array_values($constants);
    }
}
