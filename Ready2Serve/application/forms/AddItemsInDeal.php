<?php

class Application_Form_AddItemsInDeal extends Twitter_Form
{
    public function init()
    {
       $productModel = new Application_Model_Product();
       $availableItemsList = $productModel->getAllAvailableItems();
  
        $this->setName('addItemsinDeal');
        $this->setMethod('post');

        foreach ($availableItemsList as $key => $val) {
            $this->addElement('checkbox', $val['product_id'],array(
            'required' => false,
            'ignore' => true,
            'label' => '',
        ));  
            $this->addElement('Text', $val['product_id'].'q', array(
            'filters' => array('StringTrim'),
            'placeholder' => 'Quantity',
            'autofocus' => 'true',
            'validators' => array(
                array('StringLength', false, array(2, 5)),
            ),
            'required' => true,
            'attribs' => array('disabled' => 'disabled'),
        ));
        }
        $this->addElement('submit', 'Confirm', array(
            'required' => false,
            'ignore' => true,
            'label' => 'Confirm',
        ));  
    }
           
}