<?php
/**
 * File CollectOnDeliveryForm.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class CollectOnDeliveryForm
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/definicjaPaczki.html
 */
final class CollectOnDeliveryForm
{
    const CASH = 'CASH';
    const BANK_TRANSFER  = 'BANK_TRANSFER';
    
    private function __construct() {}
    
    /**
     * 
     * @return array
     */
    public static function getForms()
    {
        $refClass = new \ReflectionClass(get_class());
        $constants = $refClass->getConstants();
        
        return array_values($constants);
    }
}
