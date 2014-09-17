<?php
include 'Autoloader.php';
/**
 * Contains run function call for autoloader class
 * 
 * This file provides an interface to start the whole system.
 *
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */
Autoloader::run();
   
$frontControllerObject = FrontController::getInstance();
$request=array();
$request['controller']="Oauth";
$request['action']="loginUser";
$frontControllerObject->direct($request);


