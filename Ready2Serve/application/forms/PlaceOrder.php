<?php

class Application_Form_PlaceOrder extends Twitter_Form
{

    public $checkBoxIDArray = array();
    public $quantityArray = array();
    public $discountArray = array();
    public $productArray = array();
    public $priceArray = array();

    // public $confirmButton;

    public function init()
    {
        $this->setMethod('post');
        $pM = new Application_Model_Product();
        $products = $pM->getAllProducts();
        foreach ($products as $prod) {
            if ($prod['is_product_available'] == 'yes') {
                $this->addElement('checkbox', $prod['product_id']);
                array_push($this->checkBoxIDArray, $prod['product_id']);

                $this->addElement('text', $prod['product_id'] . 'q', array(
                    'placeholder' => 'Quantity',
                    'required' => true,
                    'filters' => array('StringTrim'),
                    'validators' => array(
                        array('StringLength', false, array(1, 2))),
                    'attribs' => array('disabled' => 'disabled')));
                array_push($this->quantityArray, $prod['product_id'] . 'q');
                $this->addElement('text', $prod['product_id'] . 'd', array(
                    'placeholder' => 'Discount',
                    'required' => true,
                    'filters' => array('StringTrim'),
                    'validators' => array(
                        array('StringLength', false, array(1, 2))),
                    'attribs' => array('disabled' => 'disabled')));
                array_push($this->discountArray, $prod['product_id'] . 'd');
                array_push($this->productArray, $prod['product_description']);
                array_push($this->priceArray, $prod['product_price']);
            }
        }
        $this->addElement('submit', 'confirm', array(
            'required' => false,
            'ignore' => true,
            'label' => 'Confirm',
        ));
    }

}
