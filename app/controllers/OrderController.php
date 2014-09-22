<?php
/**
 * Contains definition of Order Controller class namely OrderController
 * 
 * This file contains one class implementation
 * named Order Controller class.
 *
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */

/**
 * Contains Order Controller class
 *
 * This Class gets a specific request from the Dispatcher class
 * and performs functions according to the request.
 * 
 * @package Ready2Serve
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */
class OrderController
{
    /**
     * @var array of string 'Object of Order Model Class'
     */
    private $request=array();
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
     * gets the order line items using order Model Class
     * 
     * @access public
     * 
     * @param integer $orderID 'ID of order'
     */
    public function getOrderLineItems($orderID)
    {
        
    }
    /**
     * Displays all orders using view script
     * 
     * @access private
     */
    public function viewAllOrdersAction()
    {
        $orderModelObject=new OrderModel();
        $viewObject=new View();
        IOAdapter::clearScreen();
        $allOrders=$orderModelObject->getAllOrders();
        $viewObject->setScript("viewAllOrders.php");
        $response = $viewObject->render($this->request['controller'],
                                        $allOrders);
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
        $this->request = $requestParam;
    }
}
