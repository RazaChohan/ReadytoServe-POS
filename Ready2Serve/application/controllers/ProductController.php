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
            $this->_redirect('auth/login');
        }
//        $deleteProductsForm = new Zend_Form();
//        $deleteProductsForm->setName('deleteProducts');
//        $deleteProductsForm->setMethod('post');
//        foreach ($productsList as $key => $val) {
//            $element = new
//                    Zend_Form_Element_Checkbox($val['product_id']);
//            $deleteProductsForm->addElement($element);
//        }
//        // $element=new Zend_Form_Element_Button('Confirm');
//        $deleteProductsForm->addElement('submit', 'Confirm', array(
//            'required' => false,
//            'ignore' => true,
//            'label' => 'Confirm',
//        ));
        $this->view->list = $productsList;
        $this->view->form = $deleteProductsForm;
    }
    private function createDeleteProductsForm()
    {
        
    }
}