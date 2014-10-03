<?php

class Application_Form_DeleteProducts extends Twitter_Form
{
    public function init()
    {
        $productModel = new Application_Model_Product();
        $productsList = $productModel->getAllProducts();
  
        $this->setName('deleteProducts');
        $this->setMethod('post');

        foreach ($productsList as $key => $val) {
            $this->addElement('checkbox', $val['product_id'],array(
            'required' => false,
            'ignore' => true,
            'label' => '',
        ));  
        }
        $this->addElement('submit', 'Confirm', array(
            'required' => false,
            'ignore' => true,
            'label' => 'Confirm', 
        ));  
    }
}

