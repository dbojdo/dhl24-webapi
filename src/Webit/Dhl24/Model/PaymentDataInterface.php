<?php
/**
 * File PaymentDataInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Interface PaymentDataInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/paymentData.html
 */
interface PaymentDataInterface
{
    /**
     * @return string
     */
    public function getPaymentMethod();
    
    /**
     * 
     * @param string $paymentMethod
     */
    public function setPaymentMethod($paymentMethod);
    
    /**
     * @return string
     */
    public function getPayerType();
    
    /**
     * 
     * @param string $payerType
     */
    public function setPayerType($payerType);
    
    /**
     * @return string
     */
    public function getAccountNumber();
    
    /**
     * 
     * @param string $accountNumber
     */
    public function setAccountNumber($accountNumber);
    
    /**
     * @return string
     */
    public function getCostsCenter();
    
    /**
     * 
     * @param string $costsCenter
     */
    public function setCostsCenter($costsCenter);
}
