<?php
/**
 * File Address.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class Address
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/adresowa.html
 */
class Address implements AddressInterface
{
    /**
     * 
     * @var string
     * @DHL\String(60)
     * @DHL\Required
     */
    protected $name;
    
    /**
     * 
     * @var string
     * @DHL\String(10)
     * @DHL\Required
     */
    protected $postalCode;
    
    /**
     * 
     * @var string
     * @DHL\String(17)
     * @DHL\Required 
     */
    protected $city;
    
    /**
     * 
     * @var string
     * @DHL\String(22)
     * @DHL\Required
     */
    protected $street;
    
    /**
     * 
     * @var string
     * @DHL\String(7)
     * @DHL\Required
     */
    protected $houseNumber;
    
    /**
     * 
     * @var string
     * @DHL\String(7)
     */
    protected $apartmentNumber;
    
    /**
     * 
     * @var string
     * @DHL\String(60)
     */
    protected $contactPerson;
    
    /**
     *
     * @var string
     * @DHL\String(20)
     */
    protected $contactPhone;
    
    /**
     *
     * @var string
     * @DHL\String(60)
     */
    protected $contactEmail;

    /**
     * 
     * @param string $name
     * @param string $postalCode
     * @param string $city
     * @param string $street
     * @param string $houseNumber
     * @param string $apartmentNumber
     * @param string $contactPerson
     * @param string $contactPhone
     * @param string $contactEmail
     */
    public function __construct(
        $name = null, 
        $postalCode = null, 
        $city = null, 
        $street = null, 
        $houseNumber = null, 
        $apartmentNumber = null, 
        $contactPerson = null, 
        $contactPhone = null, 
        $contactEmail = null
    ) {
        $this->setName($name);
        $this->setPostalCode($postalCode);
        $this->setCity($city);
        $this->setStreet($street);
        $this->setHouseNumber($houseNumber);
        $this->setApartmentNumber($apartmentNumber);
        $this->setContactPerson($contactPerson);
        $this->setContactPhone($contactPhone);
        $this->setContactEmail($contactEmail);
    }
    
    /**
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     *
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     *
     * @param string $postalCode
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
    }

    /**
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     *
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     *
     * @param string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     *
     * @param string $houseNumber
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;
    }

    /**
     *
     * @return string
     */
    public function getApartmentNumber()
    {
        return $this->apartmentNumber;
    }

    /**
     *
     * @param string $apartmentNumber
     */
    public function setApartmentNumber($apartmentNumber)
    {
        $this->apartmentNumber = $apartmentNumber;
    }

    /**
     *
     * @return string
     */
    public function getContactPerson()
    {
        return $this->contactPerson;
    }

    /**
     *
     * @param string $contactPerson
     */
    public function setContactPerson($contactPerson)
    {
        $this->contactPerson = $contactPerson;
    }

    /**
     *
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     *
     * @param string $contactPhone
     */
    public function setContactPhone($contactPhone)
    {
        $this->contactPhone = $contactPhone;
    }

    /**
     *
     * @return string
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     *
     * @param string $contactEmail
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
    }
}
