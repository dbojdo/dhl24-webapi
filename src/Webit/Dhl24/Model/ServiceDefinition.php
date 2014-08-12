<?php
/**
 * File ServiceDefinition.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class ServiceDefinition
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/serviceDefinition.html
 */
class ServiceDefinition implements ServiceDefinitionInterface
{
    /**
     * 
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $product;
    
    /**
     *
     * @var bool
     * @DHL\Bool
     */
    protected $deliveryEvening;
    
    /**
     *
     * @var bool
     * @DHL\Bool
     */
    protected $deliverySaturday;
    
    /**
     *
     * @var bool
     * @DHL\Bool
     */
    protected $collectOnDelivery;
    
    /**
     *
     * @var float
     * @DHL\Float
     */
    protected $collectOnDeliveryValue;
    
    /**
     *
     * @var string
     * @DHL\String
     */
    protected $collectOnDeliveryForm;
    
    /**
     *
     * @var string
     * @DHL\String
     */
    protected $collectOnDeliveryReference;
    
    /**
     *
     * @var bool
     * @DHL\Bool
     */
    protected $insurance;
    
    /**
     *
     * @var float
     * @DHL\Float
     */
    protected $insuranceValue;
    
    /**
     * 
     * @var bool
     * @DHL\Bool
     */
    protected $returnOnDelivery;
    
    /**
     * 
     * @var string
     * @DHL\String
     */
    protected $returnOnDeliveryReference;
    
    /**
     *
     * @var bool
     * @DHL\Bool
     */
    protected $proofOfDelivery;
    
    /**
     *
     * @var bool
     * @DHL\Bool
     */
    protected $selfCollect;
    
    /**
     *
     * @var bool
     * @DHL\Bool
     */
    protected $predeliveryInformation;
    
    /**
     *
     * @var bool
     * @DHL\Bool
     */
    protected $preaviso;

    /**
     * 
     * @param string $product
     * @param bool $deliveryEvening
     * @param bool $deliverySaturday
     * @param bool $collectOnDelivery
     * @param float $collectOnDeliveryValue
     * @param string $collectOnDeliveryForm
     * @param string $collectOnDeliveryReference
     * @param bool $insurance
     * @param float $insuranceValue
     * @param bool $returnOnDelivery
     * @param string $returnOnDeliveryReference
     * @param bool $proofOfDelivery
     * @param bool $selfCollect
     * @param bool $predeliveryInformation
     * @param bool $preaviso
     */
    public function __construct(
	   $product = null,
       $deliveryEvening = false,
       $deliverySaturday = false,
       $collectOnDelivery = false,
       $collectOnDeliveryValue = null,
       $collectOnDeliveryForm = null,
       $collectOnDeliveryReference = null,
       $insurance = false,
       $insuranceValue = null,
       $returnOnDelivery = false,
       $returnOnDeliveryReference = null,
       $proofOfDelivery = false,
       $selfCollect = false,
       $predeliveryInformation = false,
       $preaviso = false
    ) {
        $this->setProduct($product);
        $this->setDeliveryEvening($deliveryEvening);
        $this->setDeliverySaturday($deliverySaturday);
        $this->setCollectOnDelivery($collectOnDelivery);
        $this->setCollectOnDeliveryValue($collectOnDeliveryValue);
        $this->setCollectOnDeliveryForm($collectOnDeliveryForm);
        $this->setCollectOnDeliveryReference($collectOnDeliveryReference);
        $this->setInsurance($insurance);
        $this->setInsuranceValue($insuranceValue);
        $this->setReturnOnDelivery($returnOnDelivery);
        $this->setReturnOnDeliveryReference($returnOnDeliveryReference);
        $this->setProofOfDelivery($proofOfDelivery);
        $this->setSelfCollect($selfCollect);
        $this->setPredeliveryInformation($predeliveryInformation);
        $this->setPreaviso($preaviso);
    }
    
    /**
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     *
     * @param string $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     *
     * @return bool
     */
    public function getDeliveryEvening()
    {
        return $this->deliveryEvening;
    }

    /**
     *
     * @param bool $deliveryEvening
     */
    public function setDeliveryEvening($deliveryEvening)
    {
        $this->deliveryEvening = $deliveryEvening;
    }

    /**
     *
     * @return bool
     */
    public function getDeliverySaturday()
    {
        return $this->deliverySaturday;
    }

    /**
     *
     * @param bool $deliverySaturday
     */
    public function setDeliverySaturday($deliverySaturday)
    {
        $this->deliverySaturday = $deliverySaturday;
    }

    /**
     *
     * @return bool
     */
    public function getCollectOnDelivery()
    {
        return $this->collectOnDelivery;
    }

    /**
     *
     * @param bool $collectOnDelivery
     */
    public function setCollectOnDelivery($collectOnDelivery)
    {
        $this->collectOnDelivery = $collectOnDelivery;
    }

    /**
     *
     * @return float
     */
    public function getCollectOnDeliveryValue()
    {
        return $this->collectOnDeliveryValue;
    }

    /**
     *
     * @param float $collectOnDeliveryValue
     */
    public function setCollectOnDeliveryValue($collectOnDeliveryValue)
    {
        $this->collectOnDeliveryValue = $collectOnDeliveryValue;
    }

    /**
     *
     * @return string
     */
    public function getCollectOnDeliveryForm()
    {
        return $this->collectOnDeliveryForm;
    }

    /**
     *
     * @param string $collectOnDeliveryForm
     */
    public function setCollectOnDeliveryForm($collectOnDeliveryForm)
    {
        $this->collectOnDeliveryForm = $collectOnDeliveryForm;
    }

    /**
     *
     * @return string
     */
    public function getCollectOnDeliveryReference()
    {
        return $this->collectOnDeliveryReference;
    }

    /**
     *
     * @param string $collectOnDeliveryReference
     */
    public function setCollectOnDeliveryReference($collectOnDeliveryReference)
    {
        $this->collectOnDeliveryReference = $collectOnDeliveryReference;
    }

    /**
     *
     * @return bool
     */
    public function getInsurance()
    {
        return $this->insurance;
    }

    /**
     *
     * @param bool $insurance
     */
    public function setInsurance($insurance)
    {
        $this->insurance = $insurance;
    }

    /**
     *
     * @return float
     */
    public function getInsuranceValue()
    {
        return $this->insuranceValue;
    }

    /**
     *
     * @param float $insuranceValue
     */
    public function setInsuranceValue($insuranceValue)
    {
        $this->insuranceValue = $insuranceValue;
    }

    /**
     *
     * @return bool
     */
    public function getReturnOnDelivery()
    {
        return $this->returnOnDelivery;
    }

    /**
     *
     * @param bool $returnOnDelivery
     */
    public function setReturnOnDelivery($returnOnDelivery)
    {
        $this->returnOnDelivery = $returnOnDelivery;
    }

    /**
     *
     * @return string
     */
    public function getReturnOnDeliveryReference()
    {
        return $this->returnOnDeliveryReference;
    }

    /**
     *
     * @param string $returnOnDeliveryReference
     */
    public function setReturnOnDeliveryReference($returnOnDeliveryReference)
    {
        $this->returnOnDeliveryReference = $returnOnDeliveryReference;
    }

    /**
     *
     * @return bool
     */
    public function getProofOfDelivery()
    {
        return $this->proofOfDelivery;
    }

    /**
     *
     * @param bool $proofOfDelivery
     */
    public function setProofOfDelivery($proofOfDelivery)
    {
        $this->proofOfDelivery = $proofOfDelivery;
    }

    /**
     *
     * @return bool
     */
    public function getSelfCollect()
    {
        return $this->selfCollect;
    }

    /**
     *
     * @param bool $selfCollect
     */
    public function setSelfCollect($selfCollect)
    {
        $this->selfCollect = $selfCollect;
    }

    /**
     *
     * @return bool
     */
    public function getPredeliveryInformation()
    {
        return $this->predeliveryInformation;
    }

    /**
     *
     * @param bool $predeliveryInformation
     */
    public function setPredeliveryInformation($predeliveryInformation)
    {
        $this->predeliveryInformation = $predeliveryInformation;
    }

    /**
     *
     * @return bool
     */
    public function getPreaviso()
    {
        return $this->preaviso;
    }

    /**
     *
     * @param bool $preaviso
     */
    public function setPreaviso($preaviso)
    {
        $this->preaviso = $preaviso;
    }
}