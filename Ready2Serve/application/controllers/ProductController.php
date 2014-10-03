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

            $indexesArray = $this->getSpecifcValueIndexes($request->getPost(), 1);
            $productModel->changeAvailabilityStatus($indexesArray);
            $this->_redirect('/product/delete-products');
        }
        $this->view->list = $productsList;
        $this->view->form = $deleteProductsForm;
    }
    public function addProductAction()
    {
        // action body
        $addProductForm = new Application_Form_AddProduct();
        $request = $this->getRequest();
        $productModel = new Application_Model_Product();

        if ($request->isPost()) {
            $postResult = $request->getPost();
            if ($addProductForm->isValid($postResult)) {
                $lastInsertID = $productModel->addProduct($postResult);
                if ($postResult['productType'] == 'item') {
                    $addProductForm->reset();
                } else if ($postResult['productType'] == 'deal') {

                    $this->_redirect("/Product/add-items-in-deal/"
                            . "insertID/$lastInsertID");
                }
            }
        }
        $this->view->form = $addProductForm;
    }
    public function updateProductAction()
    {
        // action body
    }
    public function addItemsInDealAction()
    {
        // action body
        $insertID = $this->_getParam('insertID');
        $productModel = new Application_Model_Product();
        $addItemInDealForm = new Application_Form_AddItemsInDeal();
        $allItems = $productModel->getAllAvailableItems();
        $request = $this->getRequest();
        if ($request->isPost()) {
            $result = $this->removeNullValues($request->getPost());
            $productModel->addItemsInDeal($result, $insertID);
        }
        $this->view->form = $addItemInDealForm;
        $this->view->list = $allItems;
        
    }
    private function getSpecifcValueIndexes($array, $val)
    {
        $indexesArray = array();
        foreach ($array as $key => $value) {
            if ($value == $val) {
                array_push($indexesArray, $key);
            }
        }
        return $indexesArray;
    }
    private function removeNullValues($array)
    {
        foreach ($array as $key => $value) {
            if ($value == '0') {
                unset($array[$key]);
                unset($array[$key . 'q']);
            }
        }
        return $array;
    }
}