<?php
/**
 * File AuthData.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class AuthData
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/autoryzacyjna.html
 */
class AuthData implements AuthDataInterface
{

    /**
     *
     * @var string
     * @DHL\Required
     * @DHL\String(32)
     */
    protected $username;

    /**
     *
     * @var string
     * @DHL\Required
     * @DHL\String(32)
     */
    protected $password;

    /**
     * 
     * @param string $username
     * @param string $password
     */
    public function __construct($username = null, $password = null)
    {
        $this->setUsername($username);
        $this->setPassword($password);
    }
    
    /**
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     *
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     *
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }
}
