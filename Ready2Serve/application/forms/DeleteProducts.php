<?php

class Application_Form_DeleteProducts extends Twitter_Form
{
        protected $_allProducts = null;
        
    public function init()
    {
   
    }
    
    /**
     * Setter for allProducts Array
     * @param <products> $products 
     */
    public function setAllProducts($products){
        $this->_allProducts = $products;
    }


}

