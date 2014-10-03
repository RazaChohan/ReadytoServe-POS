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

    private function getSpecifcValueIndexes($array, $val)
    {
        $indexesArray=array();
            foreach ($array as $key => $value) {
                if ($value == $val) {
                    array_push($indexesArray, $key);
                }
            }
            return $indexesArray;
    }

    public function addProductAction()
    {
        // action body
        $form = new Application_Form_AddProduct();
        $request = $this->getRequest();
        if ($request->isPost()) {
            var_dump($request->getPost());
            die();
        }
   
        $this->view->form = $form;
    }

    public function updateProductAction()
    {
        // action body
    }


}



