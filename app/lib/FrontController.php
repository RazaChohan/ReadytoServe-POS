<?php
/**
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
  * @var Dispatcher object of dispatcher class 
  */
  private $dispatcher = null;
  /**
  * @var FrontController an instance of FrontController Class
  */
  private static $instance = null;
  /**
  * contructs an instance of front controller
  * 
  * @access private
  */
  private function __construct()
  {
    //Initialization of View and Dispatcher
      $this->dispatcher=new Dispatcher();
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
        if (self::$instance == NULL) {
            self::$instance = new FrontController();
        }
        return self::$instance;
  }
  /**
  * Verfies request path and directs it
  *
  * @param string $request array of strings containing complete path
  *
  * @access public
  */
  public function direct($request)
  {
      $this->dispatchRequest($request);
  }
  /**
  * Dispatches request to dispatcher
  *
  * @param string $request array of strings containing complete path
  *
  * @access private
  */
  private function dispatchRequest($request)
  {
      $this->dispatcher->dispatch($request);    
  } 
}
