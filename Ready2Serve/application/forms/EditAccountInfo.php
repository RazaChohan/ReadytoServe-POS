<?php

class Application_Form_EditAccountInfo extends Zend_Form
{

    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setName("editAccountInfo");
        $this->setMethod('post');


        $this->addElement('password', 'password', array(
            'filters' => array('StringTrim'),
            'placeholder' => 'Password',
            'autofocus' => 'true',
            'validators' => array(
                array('StringLength', false, array(8, 50)),
            ),
            'required' => true,
        ));
        
        $this->addElement('password', 'confirmpassword', array(
            'filters' => array('StringTrim'),
            'placeholder' => 'Confirm Password',
            'autofocus' => 'true',
            'validators' => array(
                array('StringLength', false, array(8, 50)),
            ),
            'required' => true,
        ));

        $this->addElement('submit', 'save', array(
            'required' => false,
            'ignore' => true,
            'label' => 'Save',
        ));
    }
    

}
