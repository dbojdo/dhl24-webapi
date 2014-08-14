<?php
/**
 * File ShipmentOrderInfoInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Interface ShipmentOrderInfoInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/shipmentOrderInfo.html
 */
interface ShipmentOrderInfoInterface
{
    /**
     * @return AddressInterface
     */
    public function getShipper();

    /**
     * @param AddressInterface $shipper
     */
    public function setShipper(AddressInterface $shipper);

    /**
     * @return int
     */
    public function getNumberOfExPieces();

    /**
     * @param int $numberOfExPieces
     */
    public function setNumberOfExPieces($numberOfExPieces);

    /**
     * @return int
     */
    public function getNumberOfDrPieces();

    /**
     * @param int $numberOfDrPieces
     */
    public function setNumberOfDrPieces($numberOfDrPieces);

    /**
     * @return int
     */
    public function getTotalWeight();

    /**
     * @param int $totalWeight
     */
    public function setTotalWeight($totalWeight);

    /**
     * @return int
     */
    public function getHeaviestPieceWeight();

    /**
     * @param int $heaviestPieceWeight
     */
    public function setHeaviestPieceWeight($heaviestPieceWeight);
}
