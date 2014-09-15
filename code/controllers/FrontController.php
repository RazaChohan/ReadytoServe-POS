<?php

namespace ready2Serve\Controller\FrontController;

/*
 * This file contains implementation of FrontController class
 * 
 * @package ready2Serve
 * @version 1.0
 */

/**
 * A centralized access point for request handling.
 *
 * @package ready2Serve
 * @author  Jamshad Ahmad <jamshad.ahmad@coeus-solutions.de>
 * @version 1.0
 */
class FrontController 
{
  /**
  * @var dispatcher object of dispatcher class 
  */
  protected $dispatcher = null;
  
  /**
   * @var frontControllerInstance an instance of FrontController Class
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
  * @return FrontController singleton instance of FrontController
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
  * checks whether user is authenticated or not
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
  * @param request array of strings containing complete path
  *
  * @access public
  */
  public function direct($request)
  {
      
  }
  
  /**
  * Verfies request path and directs it.
  *
  * @param request array of strings containing complete path
  *
  * @access public
  */
  public function dispatchRequest($request)
  {
      
  }
}
