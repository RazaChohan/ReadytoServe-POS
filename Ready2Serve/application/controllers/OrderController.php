<?php

class OrderController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function placeOrderAction()
    {
        // action body
    }

    public function viewAllOrdersAction()
    {
        // action body
        $orderModel=new Application_Model_Order();
        $resultset=$orderModel->getAllOrders();
        $this->view->names = $resultset;
        
    }


}





