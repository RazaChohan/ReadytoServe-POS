<?php

class Application_Form_AddProduct extends Twitter_Form
{
    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setName("addProduct");
        $this->setMethod('post');


        $this->addElement('Text', 'productName', array(
            'filters' => array('StringTrim'),
            'placeholder' => 'Product Name',
            'autofocus' => 'true',
            'validators' => array(
                array('StringLength', false, array(2, 50)),
            ),
            'required' => true,
        ));

        $this->addElement('radio', 'productType', array(
            'multiOptions' => array(
                'item' => 'Item',
                'deal' => 'Deal',
            ),
            'required'=> true
        ));
        
        $this->addElement('radio', 'productAvailability', array(
            'multiOptions' => array(
                'yes' => 'Yes',
                'no' => 'No',
            ),
            'required'=> true
        ));
        
         $this->addElement('radio', 'productOrderability', array(
            'multiOptions' => array(
                'yes' => 'Yes',
                'no' => 'No',
            ),
             'required'=> true
        ));
         
         $this->addElement('Text', 'productPrice', array(
            'filters' => array('StringTrim'),
            'placeholder' => 'Product Price',
            'autofocus' => 'true',
            'validators' => array(
                array('StringLength', false, array(2, 50)),
            ),
            'required' => true,
        ));
        
        
        $this->addElement('submit', 'Save', array(
            'required' => false,
            'ignore' => true,
            'label' => 'Save',
        ));
    }
}