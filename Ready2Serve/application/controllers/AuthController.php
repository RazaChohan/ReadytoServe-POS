<?php

class AuthController extends Zend_Controller_Action
{
    public function init()
    {
        /* Initialize action controller here */
    }
    public function indexAction()
    {
       
    }
    protected function _process($values)
    {
// Get our authentication adapter and check credentials
        $adapter = $this->_getAuthAdapter();
        $adapter->setIdentity($values['username']);
        $adapter->setCredential($values['password']);

        $auth = Zend_Auth::getInstance();
        $result = $auth->authenticate($adapter);
        if ($result->isValid()) {
            $user = $adapter->getResultRowObject();
            $auth->getStorage()->write($user);
            return true;
        }
        return false;
    }
    public function loginAction()
    {
         // action body
        $loginForm = new Application_Form_Login();
        $request = $this->getRequest();
        if ($request->isPost()) {
            if ($loginForm->isValid($request->getPost())) {
                
            }
        }
        $this->view->form = $loginForm;
        // action body
    }
     protected function _getAuthAdapter()
    {
        $dbAdapter = Zend_Db_Table::getDefaultAdapter();
        $authAdapter = new Zend_Auth_Adapter_DbTable($dbAdapter);

        $authAdapter->setTableName('person')
                    ->setIdentityColumn('username')
                    ->setCredentialColumn('password');

        return $authAdapter;
    }
}