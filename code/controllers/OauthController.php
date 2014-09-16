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
    /**
     * Login user action function that will call the view object.
     * 
     * @access public
     */
    public function loginUser($request)
    {
        $viewObject=new View();
        $request['View']="welcome.php";
        $response=$viewObject->render($request['View'],$request['controller']);
        return $response;
    }
    /**
     * Login user action function that will call the view object.
     * 
     * @access public
     */
    public function getRequest($request)
    {
        $response=null;
        if($request['action']==="loginUser")
        {
            $response=$this->loginUser($request);
        }
        return $response;
    }
    


}
