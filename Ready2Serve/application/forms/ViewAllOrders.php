<?php

class Application_Form_ViewAllOrders extends Twitter_Form
{
    public function init()
    {
        /* Form Elements & Other Definitions Here ... */
        $this->setName("viewOrders");
        $this->setMethod('post');


        $this->addElement('Text', 'datepicker-8', array(
            'placeholder' => 'Begin Date',
            'autofocus' => 'true',
            'required' => true,
        ));

        $this->addElement('Text', 'datepicker-9', array(
            'placeholder' => 'End Date',
            'required' => true,
        ));


        $this->addElement('submit', 'Search', array(
            'required' => false,
            'ignore' => true,
            'label' => 'Login',
        ));
        $this->setDecorators(array(
            'FormElements',
            array('HtmlTag', array('tag' => 'dl', 'class' => 'zend_form')),
            array('Description', array('placement' => 'prepend')),
            'Form'
        ));
    }
}