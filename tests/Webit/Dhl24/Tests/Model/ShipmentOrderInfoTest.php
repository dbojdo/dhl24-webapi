<?php
/**
 * ShipmentOrderInfoTest.php
 *
 * @author dbojdo - Daniel Bojdo <daniel.bojdo@dxi.eu>
 * Created on Aug 14, 2014, 11:01
 * Copyright (C) DXI Ltd
 */

namespace Webit\Dhl24\Tests\Model;

use Webit\Dhl24\Model\ShipmentOrderInfo;

/**
 * Class ShipmentOrderInfoTest
 * @package Webit\Dhl24\Tests\Model
 */
class ShipmentOrderInfoTest extends \PHPUnit_Framework_TestCase
{
    public function testConstructorSetter()
    {
        $data = $this->getData();

        $shipmentOrderInfo = new ShipmentOrderInfo(
            $data['shipper'],
            $data['ex_pieces'],
            $data['dr_pieces'],
            $data['total'],
            $data['heaviest']
        );

        $this->checkData($shipmentOrderInfo, $data);
    }

    public function testSetterAndGetter()
    {
        $data = $this->getData();

        $shipmentOrderInfo = new ShipmentOrderInfo();
        $shipmentOrderInfo->setShipper($data['shipper']);
        $shipmentOrderInfo->setNumberOfExPieces($data['ex_pieces']);
        $shipmentOrderInfo->setNumberOfDrPieces($data['dr_pieces']);
        $shipmentOrderInfo->setTotalWeight($data['total']);
        $shipmentOrderInfo->setHeaviestPieceWeight($data['heaviest']);

        $this->checkData($shipmentOrderInfo, $data);
    }


    private function checkData(ShipmentOrderInfo $shipmentOrderInfo, array $data)
    {
        $this->assertEquals($data['shipper'], $shipmentOrderInfo->getShipper());
        $this->assertEquals($data['ex_pieces'], $shipmentOrderInfo->getNumberOfExPieces());
        $this->assertEquals($data['dr_pieces'], $shipmentOrderInfo->getNumberOfDrPieces());
        $this->assertEquals($data['total'], $shipmentOrderInfo->getTotalWeight());
        $this->assertEquals($data['heaviest'], $shipmentOrderInfo->getHeaviestPieceWeight());
    }

    /**
     *
     * @return array
     */
    private function getData()
    {
        $data = array(
            'shipper' => $this->getMock('Webit\Dhl24\Model\AddressInterface'),
            'ex_pieces' => 5,
            'dr_pieces' => 10,
            'total' => 254,
            'heaviest' => 56
        );

        return $data;
    }
}
