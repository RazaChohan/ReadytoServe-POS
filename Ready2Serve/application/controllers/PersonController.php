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
        $form = new Application_Form_EditAccountInfo();
        $this->view->form = $form;
        $request = $this->getRequest();
        if ($request->isPost()) {
            if ($form->isValid($request->getPost())) {
                $personModel = new Application_Model_Person();
                if($personModel->editAccountInfo($form->getValues())){
                    $userType=Zend_Registry::get('personType');
                    if($userType=='Admin'){
                        $this->_redirect('Order/view-all-orders');
                    }
                    else{
                        $this->_redirect('Order/place-order'); 
                    }
                }
                
            }
        }
    }

}
