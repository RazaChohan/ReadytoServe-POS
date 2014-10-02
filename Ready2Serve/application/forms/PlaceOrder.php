<?php

class Application_Form_PlaceOrder extends Twitter_Form
{

    public $checkBoxArray = array();
    public $quantityArray = array();
    public $discountArray = array();
    public $productArray = array();
    public $priceArray = array();

    public function init()
    {
        $this->setMethod('post');

        $pM = new Application_Model_Product();
        $products = $pM->getAllProducts();
        foreach ($products as $prod) {
            $checkBox = $this->createElement('checkbox', $prod['product_id']);
            array_push($this->checkBoxArray, $checkBox);
            $fieldQ = $this->createElement('text', $prod['product_id'] . 'q');
            array_push($this->quantityArray, $fieldQ);
            $fieldD = $this->createElement('text', $prod['product_id'] . 'd');
            array_push($this->discountArray, $fieldD);
            array_push($this->productArray, $prod['product_description']);
            array_push($this->priceArray, $prod['product_price']);
        }
    }

}
