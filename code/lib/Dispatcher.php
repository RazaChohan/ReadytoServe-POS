<?php
/*
 * This file contains implementation of Dispatcher
 * 
 * @package Ready2Serve
 * @version 1.0
 */
/**
 * Defines what path gets mapped into what controller function.
 *
 * @package Ready2Serve
 * @author  Jamshad Ahmad <jamshad.ahmad@coeus-solutions.de>
 * @version 1.0
 */
class Dispatcher
{   
    /**
     * Returns the instance of specified controller
     *
     * @param  string $request array of strings containg controller path
     *
     * @access private
     *
     * @return Controller an instance of controller
     */
    private function getController($request)
    {
         if ($request['controller'] === "Oauth") {
            $controller=new OauthController();
        }
        if ($request['controller'] === "Person") {
            $controller=new PersonController();
            
        }
        return $controller;
    }
    /**
     * Dispatches the request to its relative controller
     *
     * @param  string $request array of strings containg controller path
     *
     * @access public
     */
    public function dispatch($request)
    {
       $controller=$this->getController($request);
       $controller->getRequest($request);
       
    }
}