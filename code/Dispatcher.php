<?php
/*
 * This file contains implementation of Dispatcher
 * 
 * @package Ready2Serve
 * @version 1.0
 */
namespace ready2Serve\Dispatcher;

/**
 * Defines what url pattern gets mapped into what controller funciton.
 *
 * @package Ready2Serve
 * @author  Jamshad Ahmad <jamshad.ahmad@coeus-solutions.de>
 * @version 1.0
 */
class Dispatcher {
   /**
   * @var ProductController instance of ProductController
   */
   private $productController = null;
   
   /**
   * @var OrderController instance of OrderController
   */
   private $orderController = null;
   
   /**
   * @var PersonController instance of PersonController
   */
   private $personController = null;
   
   /**
   * @var OuthController instance of OuthController
   */
   private $outhController = null;
   
   /**
   * constructs an object of Dispatcher
   *
   * @access public
   */
   public function __construct()
   {
      
   }
   
   /**
   * Dispatches the request to its relative controller
   *
   * @param string $request array of strings containg controller path
   *
   * @access public
   */
   public function dispatch($request)
   {
       
   }
}
