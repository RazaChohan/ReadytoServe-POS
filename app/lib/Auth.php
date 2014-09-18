<?php

/**
 * Contains definition of Auth Class
 * 
 * This file contains one class implementation
 * named ProductController class.
 *
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */

/**
 * Contains Auth class
 *
 * This Class sets username , person type and isAuthenticated data members
 * 
 * @package Ready2Serve
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 * 
 */
class Auth
{
    /*
     * @var string $userName 'userName of user loggedIn'
     */

    private static $userName = null;
    /*
     * @var string $personType 'Type of person logged in (Admin or Salesperson'
     */
    private static $personType = null;
    /*
     * @var Boolean $isAuthenticated 'whether user is authenticated or not'
     */
    private static $isAuthenticated = false;

    /**
     * sets class Data members.
     * 
     * @access public
     * @param string  $uName 'userName of logged in person'
     *        string  $pType 'Type of person/user logged in'
     *        Boolean $isAuth 'Is User Authenticated'
     */
    public static function setAuthDataMembers($uName, $pType, $isAuth)
    {
        self::$userName = $uName;
        self::$personType = $pType;
        self::$isAuthenticated = $isAuth;
    }

    /**
     * sets class Data members.
     * 
     * @access public
     * 
     * #
     * 
     */
    public static function getPersonType()
    {
        return self::$personType;
    }

    public static function getUserName()
    {
        return self::$userName;
    }

    public static function isAuthentic()
    {
        return self::$isAuthenticated;
    }

}
