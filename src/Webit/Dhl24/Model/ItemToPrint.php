<?php
/**
 * File ItemToPrint.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class ItemToPrint
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/itemToPrint.html
 */
class ItemToPrint implements ItemToPrintInterface
{
    /**
     * 
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $labelType;
    
    /**
     * 
     * @var int
     * @DHL\Int
     * @DHL\Required
     */
    protected $shipmentId;

    /**
     * 
     * @param string $labelType
     * @param int $shipmentId
     */
    public function __construct($labelType = null, $shipmentId = null)
    {
        $this->setLabelType($labelType);
        $this->setShipmentId($shipmentId);
    }
    
    /**
     *
     * @return string
     */
    public function getLabelType()
    {
        return $this->labelType;
    }

    /**
     *
     * @param string $labelType
     */
    public function setLabelType($labelType)
    {
        $this->labelType = $labelType;
    }

    /**
     *
     * @return int
     */
    public function getShipmentId()
    {
        return $this->shipmentId;
    }

    /**
     *
     * @param int $shipmentId
     */
    public function setShipmentId($shipmentId)
    {
        $this->shipmentId = $shipmentId;
    }
	
   
    
}
