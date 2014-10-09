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
        $form = new Application_Form_PlaceOrder();
        $pM = new Application_Model_Product();
        $products = $pM->getAllProducts();
        $request = $this->getRequest();
        $oM=new Application_Model_Order();
        if ($request->isPost()) {
            $values = $this->createIndexedArray($request->getPost(), $form->checkBoxIDArray);
            $oM->placeOrder($values);
        }
        $this->view->form = $form;
        $this->view->list = $products;
    }

    public function viewAllOrdersAction()
    {
        $viewOrdersForm = new Application_Form_ViewAllOrders();

        $request = $this->getRequest();
        if ($request->isPost()) {
            $this->view->form = $viewOrdersForm;
            $orderModel = new Application_Model_Order();
            $resultset = $orderModel->getAllOrders();
            $this->view->names = $resultset;
        }
        $orderModel = new Application_Model_Order();
        $resultset = $orderModel->getAllOrders();
        $this->view->names = $resultset;
    }

    public function createIndexedArray($values, $array)
    {
        $checkBoxArray = array();
        $discountArray = array();
        $quanitityArray = array();
        $combinedArray = array();
        for ($i = 0; $i < count($array); $i++) {
            if ($values[$array[$i]] == 1) {
                array_push($checkBoxArray, $array[$i]);
                array_push($discountArray, $values[$array[$i].'d']);
                array_push($quanitityArray, $values[$array[$i].'q']);
            }
        }
        array_push($combinedArray, $checkBoxArray);
        array_push($combinedArray, $quanitityArray);
        array_push($combinedArray, $discountArray);
        return $combinedArray;
    }

}
