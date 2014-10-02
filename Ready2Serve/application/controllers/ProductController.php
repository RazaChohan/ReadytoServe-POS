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
        $deleteProductsForm = new Application_Form_DeleteProducts();

        $productModel = new Application_Model_Product();
        $productsList = $productModel->getAllProducts();
        
        
        $request = $this->getRequest();
        if ($request->isPost()) {
            
            $indexesArray=$this->getSpecifcValueIndexes($request->getPost(),1);
            $productModel->changeAvailabilityStatus($indexesArray);
            $this->_redirect('/product/delete-products');
        }
        $this->view->list = $productsList;
        $this->view->form = $deleteProductsForm;
    }
    private function createDeleteProductsForm()
    {
        
    }
    
    private function getSpecifcValueIndexes($array,$val)
    {
        $indexesArray=array();
            foreach ($array as $key => $value) {
                if ($value == $val) {
                    array_push($indexesArray, $key);
                }
            }
            return $indexesArray;
    }
}