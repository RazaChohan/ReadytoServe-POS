<?php

function autoloaderControllers($class)
{
    $path=realpath('controllers/' . $class . '.php');
    if (is_readable($path)) {
        include $path;
    }
}
function autoloaderModels($class)
{
    $path=realpath('model/' . $class . '.php');
    if (is_readable($path)) {
        include $path;
    }
}
function autoloaderViews($class)
{
    $path=realpath('views/' . $class . '.php');
    if (is_readable($path)) {
        include $path;
    }
}
function autoloaderlib($class)
{
   $path=realpath('lib/' . $class . '.php');
    if (is_readable($path)) {
        include $path;
    }
}

function autoloaderDB($class)
{
    $path=realpath('lib/DB/' . $class . '.php');
    if (is_readable($path)) {
        include $path;
    }
}

spl_autoload_register('autoloaderControllers');
spl_autoload_register('autoloaderModels');
spl_autoload_register('autoloaderlib');
spl_autoload_register('autoloaderViews');




$oauth = new OauthController();
$dispatcher=new Dispatcher();
$orderModel=new OrderModel();
