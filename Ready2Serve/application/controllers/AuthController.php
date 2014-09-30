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
    public function loginAction()
    {
        // action body
        $loginForm = new Application_Form_Login();
//        $loginForm->setDecorators(array(
//        'PrepareElements',
//        array('ViewScript', array('viewScript' => 'loginDecorator.phtml')),
//        ));

        $request = $this->getRequest();
        if ($request->isPost()) {
            if ($loginForm->isValid($request->getPost())) {
                if ($this->_process($loginForm->getValues())) {
                    $userType = Zend_Registry::get('personType');
                    if($userType==='Admin')
                    {
                    $this->_redirect('Order/view-all-orders');
                    }
                    else if($userType==='Salesperson')
                    {
                       $this->_redirect('Order/place-order');  
                    }
                } else {
                    $loginForm->getElement('password')->addError('Invalid'
                            . ' Credentials');
                    $loginForm->markAsError();
                    $this->view->form = $loginForm;
                }
            } else {
                $this->view->form = $loginForm;
            }
        }
        $this->view->form = $loginForm;
    }
    
    public function logoutAction()
    {
        //Unset usertype from zend_registry <-- not handled
        Zend_Auth::getInstance()->clearIdentity();
        Zend_Session::destroy();

        $this->_redirect('/auth/login');
    }


    protected function _process($values)
    {
        $adapter = $this->_getAuthAdapter();
        $adapter->setIdentity($values['username']);
        $adapter->setCredential($values['password']);
       
        $auth = Zend_Auth::getInstance();
        $result = $auth->authenticate($adapter);
        if ($result->isValid()) {
            $user = $adapter->getResultRowObject();
            $auth->getStorage()->write($user);

            $str = (array) $user;
            Zend_Registry::set('personType', $str['person_type']);

            return true;
        }
        return false;
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