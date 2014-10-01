<?php

class ProductController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }
    public function indexAction()
    {
        // action body
    }
    public function showAllProductsAction()
    {
        // action body
        $productModel = new Application_Model_Product();
        $result = $productModel->getAllProducts();
        $this->view->result = $result;
    }
    public function deleteProductsAction()
    {
        // action body
        $productModel = new Application_Model_Product();
        $productsList = $productModel->getAllProducts();
        $elementsArray=array();
        $deleteProductsForm = new Zend_Form();
        $deleteProductsForm->setName('deleteProducts');
        $var = intval(1);
        foreach ($productsList as $key => $val) {
            $var = $var + 1;
            $element = new 
                    Zend_Form_Element_Checkbox($val['product_id']);
            $deleteProductsForm->addElement($element); 
        }
        $this->view->list = $productsList;
        $this->view->form=$deleteProductsForm;
    }
}
    