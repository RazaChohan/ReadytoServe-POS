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
        $form= new Application_Form_PlaceOrder();
        $this->view->form=$form;
    }

    public function viewAllOrdersAction()
    {
        $viewOrdersForm = new Application_Form_ViewAllOrders();

        $request = $this->getRequest();
        if ($request->isPost()) {
        $this->view->form = $viewOrdersForm;
        $orderModel=new Application_Model_Order();
        $resultset=$orderModel->getAllOrders();
        $this->view->names = $resultset;
        }
        $orderModel=new Application_Model_Order();
        $resultset=$orderModel->getAllOrders();
        $this->view->names = $resultset;
        
    }


}





