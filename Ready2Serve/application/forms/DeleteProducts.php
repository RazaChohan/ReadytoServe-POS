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
            $element = new
                    Zend_Form_Element_Checkbox($val['product_id']);
            $this->addElement($element);
        }
        $this->addElement('submit', 'Confirm', array(
            'required' => false,
            'ignore' => true,
            'label' => 'Confirm',
        ));  
    }
}

