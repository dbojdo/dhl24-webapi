<?php
/**
 * File PieceDefintionType.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class PieceDefintionType
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/definicjaPaczki.html
 */
final class PieceDefintionType
{
    const ENVELOPE = 'ENVELOPE';
    const PACKAGE  = 'PACKAGE';
    const PALLET   = 'PALLET';
    
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
