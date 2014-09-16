<?php
/**
 * Contains definition of Oauth Controller class namely OauthController
 * 
 * This file contains one class implementation
 * named OauthController class.
 *
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */

/**
 * Contains Oauth Controller class
 *
 * This Class gets a specific request from the Dispatcher class
 * and performs functions according to the request.
 * 
 * @package Ready2Serve
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */
class OauthController
{
    /**
     * @var view 'View class object'
     */
    public $view;
    /**
     * @var object 'Object of Order Model Class'
     */
    private $personModel;
    /**
     * @var Boolean 'Is user Authenticated'
     */
    private $IsAuthenicated;

    /**
     *
     * Constructor of class
     */
    public function _construct()
    {
        $this->view = new View();
        $this->personModel = new personModel();
    }
    /**
     *
     * Gets the values from respective model class and passes the view class by 
     * calling its specific function and passing data.
     * 
     * @access public
     */
    public function updateView()
    {
        
    }
    /**
     *
     * authenticates the user using person Model Class
     * 
     * @access public
     * 
     * @param string $username 'Username of Person'
     * 
     *        string $password 'Password of Person'
     */
    public function authenicateUserfromModel($username, $password)
    {
        
    }
    /**
     * checks whether user is authenticated or not
     *
     * @return Boolean whether ture or false, depends on authentication
     *
     * @access public
     */
    public static function isAuthenticUser()
    {
        
    }
}
