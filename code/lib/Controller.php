<?php
/*
 * This file contains implementation of Abstract Controller Class
 * 
 * @package Ready2Serve
 * @version 1.0
 */

/**
 * Defines the basic functionality of controllers in an abstract
 *
 * @package Ready2Serve
 * @author  Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @version 1.0
 */
abstract class Controller {
   /**
   * sets the request for the controller
   *
   * @param  string $request 'array of strings containg controller path'
   *
   * @access public
   */
   public function setRequest($request)
   {
       
   }
   /**
   * Checks for the pre-requisite conditions before calling the specific 
   * action from the controller 
   *
   * @param  string $request array of strings containg controller path
   *
   * @access public
   */
   public function init()
   {
       
   }
}
