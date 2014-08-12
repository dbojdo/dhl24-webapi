<?php
/**
 * File PaymentData.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class PaymentData
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/paymentData.html
 */
class PaymentData implements PaymentDataInterface
{
    /**
     * 
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $paymentMethod;
    
    /**
     * 
     * @var string
     * @DHL\String
     * @DHL\Required
     */
    protected $payerType;
    
    /**
     *
     * @var string
     * @DHL\String(7)
     * @DHL\Required
     */
    protected $accountNumber;
    
    /**
     *
     * @var string
     * @DHL\String(20)
     * @DHL\Required
     */
    protected $costsCenter;

    /**
     * 
     * @param string $paymentMethod
     * @param string $payerType
     * @param string $accountNumber
     * @param string $costsCenter
     */
    public function __construct(
        $paymentMethod = null, 
        $payerType = null, 
        $accountNumber = null,
        $costsCenter = null
    ) {
        $this->setPaymentMethod($paymentMethod);
        $this->setPayerType($payerType);
        $this->setAccountNumber($accountNumber);
        $this->setCostsCenter($costsCenter);  
    }
    
    /**
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }

    /**
     *
     * @param string $paymentMethod
     */
    public function setPaymentMethod($paymentMethod)
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     *
     * @return string
     */
    public function getPayerType()
    {
        return $this->payerType;
    }

    /**
     *
     * @param string $payerType
     */
    public function setPayerType($payerType)
    {
        $this->payerType = $payerType;
    }

    /**
     *
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     *
     * @param string $accountNumber
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    /**
     *
     * @return string
     */
    public function getCostsCenter()
    {
        return $this->costsCenter;
    }

    /**
     *
     * @param string $costsCenter
     */
    public function setCostsCenter($costsCenter)
    {
        $this->costsCenter = $costsCenter;
    }
	
    
}
