<?php
/**
 * File ServiceDefinitionInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class ServiceDefinitionInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/serviceDefinition.html
 */
interface ServiceDefinitionInterface
{
    /**
     * @return string
     */
    public function getProduct();
    
    /**
     * 
     * @param string $product
     */
    public function setProduct($product);
    
    /**
     * @return bool
     */
    public function getDeliveryEvening();
    
    /**
     * 
     * @param bool $deliveryEvening
     */
    public function setDeliveryEvening($deliveryEvening);
    
    /**
     * @return bool
     */
    public function getDeliverySaturday();
    
    /**
     * 
     * @param bool $deliverySaturday
     */
    public function setDeliverySaturday($deliverySaturday);
    
    /**
     * @return bool
     */
    public function getCollectOnDelivery();
    
    /**
     * 
     * @param bool $collectionOnDelivery
     */
    public function setCollectOnDelivery($collectionOnDelivery);
    
    /**
     * @return float
     */
    public function getCollectOnDeliveryValue();
    
    /**
     * 
     * @param float $collectOnDeliveryValue
     */
    public function setCollectOnDeliveryValue($collectOnDeliveryValue);
    
    /**
     * @return string
     */
    public function getCollectOnDeliveryForm();
    
    /**
     * 
     * @param string $collectOnDeliveryForm
     */
    public function setCollectOnDeliveryForm($collectOnDeliveryForm);
    
    /**
     * @return string
     */
    public function getCollectOnDeliveryReference();
    
    /**
     * 
     * @param string $collectOnDeliveryReference
     */
    public function setCollectOnDeliveryReference($collectOnDeliveryReference);
    
    /**
     * @return bool
     */
    public function getInsurance();
    
    /**
     * 
     * @param bool $insurance
     */
    public function setInsurance($insurance);
    
    /**
     * @return float
     */
    public function getInsuranceValue();
    
    /**
     * 
     * @param float $insuranceValue
     */
    public function setInsuranceValue($insuranceValue);
    
    /**
     * @return bool
     */
    public function getReturnOnDelivery();
    
    /**
     * 
     * @param bool $returnOnDelivery
     */
    public function setReturnOnDelivery($returnOnDelivery);
    
    /**
     * @return string
     */
    public function getReturnOnDeliveryReference();
    
    /**
     * 
     * @param string $returnOnDeliveryReference
     */
    public function setReturnOnDeliveryReference($returnOnDeliveryReference);
    
    /**
     * @return bool
     */
    public function getProofOfDelivery();
    
    /**
     * 
     * @param bool $proofOfDelivery
     */
    public function setProofOfDelivery($proofOfDelivery);
    
    /**
     * @return bool
     */
    public function getSelfCollect();
    
    /**
     * 
     * @param bool $selfCollect
     */
    public function setSelfCollect($selfCollect);
    
    /**
     * @return bool
     */
    public function getPredeliveryInformation();
    
    /**
     * 
     * @param bool $predeliveryInformation
     */
    public function setPredeliveryInformation($predeliveryInformation);
    
    /**
     * @return bool
     */
    public function getPreaviso();
    
    /**
     * 
     * @param bool $preaviso
     */
    public function setPreaviso($preaviso);
}