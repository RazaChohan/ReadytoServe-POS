<?php
/**
 * Contains definition of Product Controller namely ProductController
 * 
 * This file contains one class implementation
 * named ProductController class.
 *
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */
/**
 * Contains Product Controller class
 *
 * This Class gets a specific request from the Dispatcher class
 * and performs functions according to the request.
 * 
 * @package Ready2Serve
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */
class ProductController
{
    /**
     * @var array of string 'Contains request'
     */
    private $request;
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
     * Gets the product Description using Product Model Class
     * 
     * @access public
     * 
     * @param integer $productID 'Product ID'
     * 
     * @return string 'Product Description'
     */
    public function getProductDescription($productID)
    {
        
    }
    /**
     *
     * sets the product Description using Product Model Class
     * 
     * @access public
     * 
     * @param integer $productID 'Product ID'
     */
    public function setProductDescription($productID)
    {
        
    }
    /**
     *
     * sets the product 'IsOrderable' property using Product Model Class
     * 
     * @access public
     * 
     * @param integer $productID 'Product ID'
     */
    public function setProductIsOrderable($productID)
    {
        
    }
    /**
     *
     * gets the product 'IsOrderable' property using Product Model Class
     * 
     * @access public
     * 
     * @param integer $productID 'Product ID'
     * 
     * @return string 'Is product Orderable (YES , NO)'
     */
    public function getProductIsOderable($productID)
    {
        
    }
    /**
     *
     * sets the product 'IsAvailable' property using Product Model Class
     * 
     * @access public
     * 
     * @param integer $productID 'Product ID'
     * 
     */
    public function setProductIsAvailable($productID)
    {
        
    }
    /**
     *
     * gets the product 'IsAvailable' property using Product Model Class
     * 
     * @access public
     * 
     * @param integer $productID 'Product ID'
     * 
     * @return string 'Is product Available (YES , NO)'
     */
    public function getProductIsAvialable($productID)
    {
        
    }
    /**
     *
     * gets the product Items using Product Model Class
     * 
     * @access public
     * 
     * @param integer $productID 'Product ID'
     * 
     * @return Array 'Items of a product'
     */
    public function getAllItems($productID)
    {
        
    }
    /**
     *
     * sets the product Items using Product Model Class
     * 
     * @access public
     * 
     * @param integer $productID 'Product ID'
     * 
     */
    public function setProductItems($productID)
    {
        
    }
    /**
     * gets the request from callee.
     * 
     * @access public
     */
    public function getRequest($request)
    {
        $actionName = $request['action'] . 'Action';
        $this->$actionName($request);
    }
    /**
     * Manage Products Action
     * 
     * @access private
     */
    public function manageProductsAction($request)
    {
        IOAdapter::clearScreen();
        $viewObject=new View();
        $viewObject->setScript("manageProduct.php");
        $response = $viewObject->render($request['controller'],NULL);
        $this->showResponse($response);
    }
      /**
     * Displays the response of the view script.
     * 
     * @access public
     */
    public function showResponse($response)
    {
        echo $response;
    }
    /**
     * sets the request data member of class.
     * 
     * @access public
     * 
     * @param array $requestParam 'Array of string containing request parameters'
     */
    public function setRequest($requestParam)
    {
        $this->request=$requestParam;
    }
    
}
