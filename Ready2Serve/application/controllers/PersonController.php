<?php

class PersonController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
    }

    public function editAccountInfoAction()
    {
        // action body
        $form=  new Application_Form_EditAccountInfo();
        $this->view->form=$form;
    }


}



