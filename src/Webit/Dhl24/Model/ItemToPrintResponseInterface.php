<?php
/**
 * File ItemToPrintResponseInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Interface ItemToPrintResponseInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/itemToPrintResponse.html
 */
interface ItemToPrintResponseInterface
{
    
    /**
     *
     * @return int
     */
    public function getShipmentId();
    
    /**
     * 
     * @param int $shipmentId
     */
    public function setShipmentId($shipmentId);

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
     * @return string
     */
    public function getLabelData();
    
    /**
     * 
     * @param string $labelData
     */
    public function setLabelData($labelData);
    
    /**
     * @return string
     */
    public function getLabelMimeType();
    
    /**
     * 
     * @param string $labelMimeType
     */
    public function setLabelMimeType($labelMimeType);
}
