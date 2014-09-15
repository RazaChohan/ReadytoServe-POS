<?php

/*
 * This file contains FrontController class
 * 
 * @package Ready2Serve
 * @version 1.0
 */

namespace ready2Serve\Controller\FrontController;

/**
 * A centralized access point for request handling.
 *
 * @package Ready2Serve
 * @author  Jamshad Ahmad <jamshad.ahmad@coeus-solutions.de>
 * @version 1.0
 */
class FrontController 
{
   /**
   * @var dispatcher
   */
  protected $dispatcher = null;
  
  /**
   * @var frontControllerInstance
   */
  private static $frontControllerInstance = null;
  
  
  /**
  * contructs an instance of front controller
  * 
  * @access private
  */
  private function __construct()
  {
    
  }
  
  /**
  * returns an instance of FrontController
  *
  * @return FrontController singelton instance of FrontController
  *
  * @access public
  * @static
  */
  public static function getInstance()
  {
        if ($this->frontControllerInstance == NULL) {
            $this->frontControllerInstance = new FrontController();
            return $this->frontControllerInstance;
        }
        return $this->frontControllerInstance;
  }
  
  /**
  * returns an instance of FrontController
  *
  * @return Boolean whether ture or false, depends on authentication
  *
  * @access public
  */
  public function isAuthenticUser()
  {
      
  }
  
  /**
  * tracks request path
  *
  *
  * @access public
  */
  public function trackRequest()
  {
      
  }
  
  /**
  * Dispatches request to its relative controller
  *
  * @param $request array of strings containing complete path
  *
  * @access public
  */
  public function direct()
  {
      
  }
  
  /**
  * Verfies request path and derects it.
  *
  * @param request array of strings containing complete path
  *
  * @access public
  */
  public function dispatchRequest($request)
  {
      
  }
  
}