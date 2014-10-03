<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Description of Zend_View_Helper_JavascriptHelper
 *
 * @author coeus
 */
class Zend_View_Helper_JavascriptHelper extends Zend_View_Helper_Abstract
{
    //put your code here
    function javascriptHelper()
    {
        $request = Zend_Controller_Front::getInstance()->getRequest();
        $file_uri = 'media/js/' . $request->getControllerName() . '/' . 
                $request->getActionName() . '.js';

        if (file_exists($file_uri)) {
            $this->view->headScript()->appendFile('/' . $file_uri);
        }
    }
}