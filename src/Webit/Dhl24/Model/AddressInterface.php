<?php
/**
 * File AddressInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Interface AddressInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/adresowa.html
 */
interface AddressInterface
{
    
    /**
     *
     * @return string
     */
    public function getName();

    /**
     *
     * @param string $name
     */
    public function setName($name);

    /**
     *
     * @return string
     */
    public function getPostalCode();

    /**
     *
     * @param string $postalCode
     */
    public function setPostalCode($postalCode);

    /**
     *
     * @return string
     */
    public function getCity();

    /**
     *
     * @param string $city
     */
    public function setCity($city);

    /**
     *
     * @return string
     */
    public function getStreet();

    /**
     *
     * @param string $street
     */
    public function setStreet($street);

    /**
     *
     * @return string
     */
    public function getHouseNumber();

    /**
     *
     * @param string $houseNumber
     */
    public function setHouseNumber($houseNumber);

    /**
     *
     * @return string
     */
    public function getApartmentNumber();

    /**
     *
     * @param string $apartmentNumber
     */
    public function setApartmentNumber($apartmentNumber);

    /**
     *
     * @return string
     */
    public function getContactPerson();

    /**
     *
     * @param string $contactPerson
     */
    public function setContactPerson($contactPerson);

    /**
     *
     * @return string
     */
    public function getContactPhone();

    /**
     *
     * @param string $contactPhone
     */
    public function setContactPhone($contactPhone);

    /**
     *
     * @return string
     */
    public function getContactEmail();

    /**
     *
     * @param string $contactEmail
     */
    public function setContactEmail($contactEmail);
}
