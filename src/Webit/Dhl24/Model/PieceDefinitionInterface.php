<?php
/**
 * File PieceDefinitionInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Interface PieceDefinitionInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/definicjaPaczki.html
 */
interface PieceDefinitionInterface
{
 
    /**
     *
     * @return string
     */
    public function getType();

    /**
     *
     * @param string $type
     */
    public function setType($type);

    /**
     *
     * @return int
     */
    public function getWidth();

    /**
     *
     * @param int $width
     */
    public function setWidth($width);

    /**
     *
     * @return int
     */
    public function getHeight();

    /**
     *
     * @param int $height
     */
    public function setHeight($height);

    /**
     *
     * @return int
     */
    public function getLength();

    /**
     *
     * @param int $length
     */
    public function setLength($length);

    /**
     *
     * @return int
     */
    public function getWeigth();

    /**
     *
     * @param int $weigth
     */
    public function setWeigth($weigth);

    /**
     *
     * @return int
     */
    public function getQuantity();

    /**
     *
     * @param int $quantity
     */
    public function setQuantity($quantity);

    /**
     *
     * @return bool
     */
    public function getNonStandard();

    /**
     *
     * @param bool $nonStandard
     */
    public function setNonStandard($nonStandard);

    /**
     *
     * @return string
     */
    public function getBlpPieceId();

    /**
     *
     * @param string $blpPieceId
     */
    public function setBlpPieceId($blpPieceId);
}
