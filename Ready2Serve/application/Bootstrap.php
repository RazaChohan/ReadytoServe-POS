<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    protected $_viewObj;

    protected function _initViewObj()
    {
        $this->bootstrap('view');
        $this->_viewObj = $this->getResource('view');
    }
    protected function _initDoctype()
    {
        $this->bootstrap('view');
        $view = $this->getResource('view');
        $view->doctype('XHTML1_STRICT');
    }
}