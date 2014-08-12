<?php
/**
 * File ItemToPrintInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Interface ItemToPrintInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/itemToPrint.html
 */
interface ItemToPrintInterface
{
    /**
     * @return string
     */
    public function getLabelType();
    
    /**
     * 
     * @param string $labelType
     */
    public function setLabelType($labelType);
    
    /**
     * @return int
     */
    public function getShipmentId();
    
    /**
     * 
     * @param int $shipmentId
     */
    public function setShipmentId($shipmentId);
}
