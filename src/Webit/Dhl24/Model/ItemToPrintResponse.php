<?php
/**
 * File ItemToPrintResponse.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class ItemToPrintResponse
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/itemToPrintResponse.html
 */
class ItemToPrintResponse implements ItemToPrintResponseInterface
{
    
    /**
     * 
     * @var int
     * @DHL\Int
     * @DHL\Required
     */
    protected $shipmentId;
    
    /**
     * 
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $labelType;
    
    /**
     *
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $labelData;
    
    /**
     *
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $labelMimeType;
    
    /**
     * 
     * @param int $shipmentId
     * @param string $labelType
     * @param string $labelData
     * @param string $labelMimeType
     */
    public function __construct(
	   $shipmentId = null,
       $labelType = null,
       $labelData = null,
       $labelMimeType = null
    ) {
        $this->setShipmentId($shipmentId);
        $this->setLabelType($labelType);
        $this->setLabelData($labelData);
        $this->setLabelMimeType($labelMimeType);
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
     * @return string
     */
    public function getLabelData()
    {
        return $this->labelData;
    }

    /**
     *
     * @param string $labelData
     */
    public function setLabelData($labelData)
    {
        $this->labelData = $labelData;
    }

    /**
     *
     * @return string
     */
    public function getLabelMimeType()
    {
        return $this->labelMimeType;
    }

    /**
     *
     * @param string $labelMimeType
     */
    public function setLabelMimeType($labelMimeType)
    {
        $this->labelMimeType = $labelMimeType;
    }
	
    
}
