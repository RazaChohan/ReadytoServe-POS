<?php
/**
 * Contains definitions of Autoloader class
 * 
 * This file contains one class implementation
 * named Autoloader class.
 *
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */
/**
 * Contains Autoloader class
 *
 * This Class contains mutiple functions that includes the paths of controllers,
 * models, views and library classes in project. This class uses 
 * spl_autoload_register function.
 * 
 * @package Ready2Serve
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */

class Autoloader {
    /**
     *
     * Gets the name of the class and checks that class in the 'Controllers' 
     * folder. If file exists in that folder then it includes that file in 
     * project.
     *
     * @access private
     * 
     * @param string   $class 'Name of class'
     *         
     */
    function autoloaderControllers($class)
    {
        $path = realpath('controllers/' . $class . '.php');
        if (is_readable($path)) {
            include $path;
        }
    }
     /**
     *
     * Gets the name of the class and checks that class in the 'model' 
     * folder. If file exists in that folder then it includes that file in 
     * project.
     *
     * @access private
     * 
     * @param string   $class 'Name of class'
     *         
     */
    function autoloaderModels($class)
    {
        $path = realpath('model/' . $class . '.php');
        if (is_readable($path)) {
            include $path;
        }
    }
     /**
     *
     * Gets the name of the class and checks that class in the 'views' 
     * folder. If file exists in that folder then it includes that file in 
     * project.
     *
     * @access private
     * 
     * @param string   $class 'Name of class'
     *         
     */
    function autoloaderViews($class)
    {
        $path = realpath('views/' . $class . '.php');
        if (is_readable($path)) {
            include $path;
        }
    }
     /**
     *
     * Gets the name of the class and checks that class in the 'lib' 
     * folder. If file exists in that folder then it includes that file in 
     * project.
     *
     * @access private
     * 
     * @param string   $class 'Name of class'
     *         
     */
    function autoloaderlib($class)
    {
        $path = realpath('lib/' . $class . '.php');
        if (is_readable($path)) {
            include $path;
        }
    }
     /**
     *
     * Gets the name of the class and checks that class in the 'lib/DB' 
     * folder. If file exists in that folder then it includes that file in 
     * project.
     *
     * @access private
     * 
     * @param string   $class 'Name of class'
     *         
     */
    function autoloaderDB($class)
    {
        $path = realpath('lib/DB/' . $class . '.php');
        if (is_readable($path)) {
            include $path;
        }
    }
    /**
     *
     * Registers all the above mentioned functions using spl_autoload_register
     * funtion.
     * 
     * @access private
     * 
     */
    private function register_autoload()
    {
        spl_autoload_register('Autoloader::autoloaderControllers');
        spl_autoload_register('Autoloader::autoloaderModels');
        spl_autoload_register('Autoloader::autoloaderlib');
        spl_autoload_register('Autoloader::autoloaderViews');
        spl_autoload_register('Autoloader::autoloaderDB');
        
    }
     /**
     *
     * Creates the object of Autoload class and calls the register_autoload
     * funtion to register all the autoloading functions.
     * 
     * @static 
      * 
     * @access public
     * 
     */
    public static function run()
    {
     $autoloadFiles=new Autoloader();
     $autoloadFiles->register_autoload();
   
    }
}
