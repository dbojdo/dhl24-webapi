<?php
/**
 * File ShipmentOrderInfo.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class ShipmentOrderInfo
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/shipmentOrderInfo.html
 */
class ShipmentOrderInfo implements ShipmentOrderInfoInterface
{
    /**
     * @var AddressInterface
     * @DHL\Required
     */
    protected $shipper;

    /**
     * @var int
     * @DHL\Int
     * @DHL\Required
     */
    protected $numberOfExPieces;

    /**
     * @var int
     * @DHL\Int
     * @DHL\Required
     */
    protected $numberOfDrPieces;

    /**
     * @var int
     * @DHL\Int
     * @DHL\Required
     */
    protected $totalWeight;

    /**
     * @var int
     * @DHL\Int
     * @DHL\Required
     */
    protected $heaviestPieceWeight;

    /**
     * @param AddressInterface $shipper
     * @param int $numberOfExPieces
     * @param int $numberOfDrPieces
     * @param int $totalWeight
     * @param int $heaviestPieceWeight
     */
    public function __construct(
        AddressInterface $shipper = null,
        $numberOfExPieces = 0,
        $numberOfDrPieces = 0,
        $totalWeight = 0,
        $heaviestPieceWeight = 0
    ) {
        if ($shipper) {
          $this->setShipper($shipper);
        }

        $this->setNumberOfExPieces($numberOfExPieces);
        $this->setNumberOfDrPieces($numberOfDrPieces);
        $this->setTotalWeight($totalWeight);
        $this->setHeaviestPieceWeight($heaviestPieceWeight);
    }

    /**
     * @return AddressInterface
     */
    public function getShipper()
    {
        return $this->shipper;
    }

    /**
     * @param AddressInterface $shipper
     */
    public function setShipper(AddressInterface $shipper)
    {
        $this->shipper = $shipper;
    }

    /**
     * @return int
     */
    public function getNumberOfExPieces()
    {
        return $this->numberOfExPieces;
    }

    /**
     * @param int $numberOfExPieces
     */
    public function setNumberOfExPieces($numberOfExPieces)
    {
        $this->numberOfExPieces = $numberOfExPieces;
    }

    /**
     * @return int
     */
    public function getNumberOfDrPieces()
    {
        return $this->numberOfDrPieces;
    }

    /**
     * @param int $numberOfDrPieces
     */
    public function setNumberOfDrPieces($numberOfDrPieces)
    {
        $this->numberOfDrPieces = $numberOfDrPieces;
    }

    /**
     * @return int
     */
    public function getTotalWeight()
    {
        return $this->totalWeight;
    }

    /**
     * @param int $totalWeight
     */
    public function setTotalWeight($totalWeight)
    {
        $this->totalWeight = $totalWeight;
    }

    /**
     * @return int
     */
    public function getHeaviestPieceWeight()
    {
        return $this->heaviestPieceWeight;
    }

    /**
     * @param int $heaviestPieceWeight
     */
    public function setHeaviestPieceWeight($heaviestPieceWeight)
    {
        $this->heaviestPieceWeight = $heaviestPieceWeight;
    }
}
 