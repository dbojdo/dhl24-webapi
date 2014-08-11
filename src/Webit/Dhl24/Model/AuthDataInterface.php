<?php
/**
 * File AuthDataInterface.php
 *
 * @author Daniel Bojdo <daniel.bojdo@web-it.eu>
 * @copyright 2014 Web-IT
 *
 */
namespace Webit\Dhl24\Model;

/**
 *
 * Class AuthDataInterface
 * @package Webit\Dhl24\Model
 * @see https://dhl24.com.pl/webapi/doc/autoryzacyjna.html
 */
interface AuthDataInterface
{
    
    /**
     *
     * @return string
     */
    public function getUsername();

    /**
     *
     * @param string $username
     */
    public function setUsername($username);

    /**
     *
     * @return string
     */
    public function getPassword();

    /**
     *
     * @param string $password
     */
    public function setPassword($password);
}
