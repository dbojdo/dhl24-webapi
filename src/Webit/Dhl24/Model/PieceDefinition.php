<?php
/**
 * File PieceDefinition.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class PieceDefinition
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/definicjaPaczki.html
 */
class PieceDefinition implements PieceDefinitionInterface
{
    /**
     * 
     * @var string
     * @DHL\String
     */
    protected $type;
    
    /**
     * 
     * @var int
     * @DHL\Int
     */
    protected $width;
    
    /**
     *
     * @var int
     * @DHL\Int
     */
    protected $height;
    
    /**
     *
     * @var int
     * @DHL\Int
     */
    protected $length;
    
    /**
     *
     * @var int
     * @DHL\Int
     */
    protected $weigth;
    
    /**
     *
     * @var int
     * @DHL\Int
     * @DHL\Required
     */
    protected $quantity = 1;
    
    /**
     *
     * @var bool
     * @DHL\Bool
     */
    protected $nonStandard = false;
    
    /**
     *
     * @var string
     * @DHL\String
     */
    protected $blpPieceId;

    /**
     * 
     * @param string $type
     * @param int $width
     * @param int $height
     * @param int $length
     * @param int $weigth
     * @param int $quantity
     * @param bool $nonStandard
     * @param string $blpPieceId
     */
    public function __construct(
        $type = null, 
        $width = null, 
        $height = null, 
        $length = null, 
        $weigth = null, 
        $quantity = 1, 
        $nonStandard = false, 
        $blpPieceId = null
    ) {
        $this->setType($type);
        $this->setWidth($width);
        $this->setHeight($height);
        $this->setLength($length);
        $this->setWeigth($weigth);
        $this->setQuantity($quantity);
        $this->setNonStandard($nonStandard);
        $this->setBlpPieceId($blpPieceId);    
    }
    
    /**
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     *
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     *
     * @param int $width
     */
    public function setWidth($width)
    {
        $this->width = $width;
    }

    /**
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     *
     * @param int $height
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }

    /**
     *
     * @return int
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     *
     * @param int $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     *
     * @return int
     */
    public function getWeigth()
    {
        return $this->weigth;
    }

    /**
     *
     * @param int $weigth
     */
    public function setWeigth($weigth)
    {
        $this->weigth = $weigth;
    }

    /**
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     *
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     *
     * @return bool
     */
    public function getNonStandard()
    {
        return $this->nonStandard;
    }

    /**
     *
     * @param bool $nonStandard
     */
    public function setNonStandard($nonStandard)
    {
        $this->nonStandard = $nonStandard;
    }

    /**
     *
     * @return string
     */
    public function getBlpPieceId()
    {
        return $this->blpPieceId;
    }

    /**
     *
     * @param string $blpPieceId
     */
    public function setBlpPieceId($blpPieceId)
    {
        $this->blpPieceId = $blpPieceId;
    }
	
}
