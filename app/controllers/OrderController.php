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
     * @var view 'View class object'
     */
    public $view;
    /**
     * @var object 'Object of Order Model Class'
     */
    private $orderModel;
    /**
     *
     * Constructor of class
     */
    public function __construct()
    {
        $this->view=new View();
        $this->orderModel=new OrderModel();
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
    private function viewAllOrdersAction($request)
    {
        //IOAdapter::clearScreen();
        echo "view all orders action".PHP_EOL;
        $this->orderModel->getAllOrders();
        $request['View'] = "viewAllOrders.php";
        $response = $this->view->render($request['View'],
                                        $request['controller'],NULL);
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
     * gets the request from callee.
     * 
     * @access public
     */
    public function getRequest($request)
    {
        if ($request['action'] === "viewAllOrders") {
            $this->viewAllOrdersAction($request);
        }
    }
    
}
