<?php

class Application_Form_PlaceOrder extends Zend_Form
{

    public $checkBoxArray = array();
    public $fieldQArray = array();
    public $fieldDArray = array();
    public $prodDArray = array();
    public $prodPArray = array();

    public function init()
    {
        $this->setMethod('post');

        $pM = new Application_Model_Product();
        $products = $pM->getAllProducts();
        foreach ($products as $prod) {
            $checkBox = $this->createElement('checkbox', $prod['product_id']);
            array_push($this->checkBoxArray, $checkBox);
            $fieldQ = $this->createElement('text', $prod['product_id'] . 'q');
            array_push($this->fieldQArray, $fieldQ);
            $fieldD = $this->createElement('text', $prod['product_id'] . 'd');
            array_push($this->fieldQArray, $fieldD);
            array_push($this->prodDArray, $prod['product_description']);
            array_push($this->prodPArray, $prod['product_price']);
        }
    }

}
