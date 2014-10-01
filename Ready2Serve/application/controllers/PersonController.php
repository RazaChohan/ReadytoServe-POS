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
                if ($personModel->editAccountInfo($request->getPost())) {
                    if (Zend_Auth::getInstance()->
                            getIdentity()->person_type=='Admin') {
                        $this->_redirect('Order/view-all-orders');
                    } elseif(Zend_Auth::getInstance()->
                            getIdentity()->person_type=='Admin') {
                       $this->_redirect('Order/place-order');
                    }
                }
                else 
                {
                    $error="Unable to Update Password";
                }
            }
        }
    }

}
