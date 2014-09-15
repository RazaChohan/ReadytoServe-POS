<?php
namespace  ready2toServe\Controller\PersonController;
/**
 * Contains definition of Person Controller class namely PersonController
 * 
 * This file contains one class implementation
 * named PersonController class.
 *
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */

/**
 * Contains Person Controller class
 *
 * This Class gets a specific request from the Dispatcher class
 * and performs functions according to the request.
 * 
 * @package Ready2Serve
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */
class PersonController 
{
    /**
     * @var string 'userName of user trying to login'
     */
    private $userName;
    /**
     * @var string 'password of user trying to login'
     */
    private $password; 
    /**
     * @var view 'View class object'
     */
    
    public $view; 
    /**
     * @var object 'Object of person Model Class'
     */
    private $personModel;
    /**
     *
     * Constructor of class
     */
    
    
    public function _construct()
    {
        $this->view=new View();
        $this->personModel=new personModel();
    }
    /**
     *
     * Gets the person type using Person Model Class
     * 
     * @access public
     * 
     * @param string $personUserName 'UserName of person'
     * 
     * @return string 'Person type'
     */
    public function getPersonType($personUserName)
    {
        
    }
    /**
     *
     * sets the person Password using Product Model Class
     * 
     * @access public
     * 
     * @param string $personUserName 'UserName of person'
     */
    public function setPersonPassword($personUserName)
    {
        
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
}