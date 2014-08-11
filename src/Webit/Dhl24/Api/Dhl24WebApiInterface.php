<?php
/**
 * File Dhl24WebApiInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Api;

/**
 *
 * Interface Dhl24WebApiInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc.html
 */
interface Dhl24WebApiInterface
{
    /**
     * @see https://dhl24.com.pl/webapi/doc/getVersion.html
     * @return string
     */
    public function getVersion();
    
    // TODO: declare test of methods
}
