<?php

/*
 * This file contains Registry class
 * 
 * This file contains the implementions of Registry class which needs to store
 * the data temporarily while navigating from one window to another.
 * 
 * @package Read2Serve
 * @version 1.0
 */

/*
 * Stores data temporarily
 * 
 * This is singleton class to store values whenever required with the help of
 * magic getter and setter
 * 
 * @package Read2Serve
 * @author Tayyab Hussain <tayyab.hussain@coeus-solutions.de>
 * @version 1.0
 */
class Registry
{
    /*
     * @var instace of Registry class
     */
    private $instance;
    /*
     * instantiate the Registry class
     * 
     * the constructor of Registry class is private because Registry is
     * singleton class and not to be instanstiate from any other class
     */
    private function __construct()
    {
        
    }
    /*
     * sets value to a variable
     * 
     * this magic setter recieves two parameters and creates a new property of
     * Registry class and assigns it to corresponding value
     * 
     * @param Object $key      new property of Registry class
     * @param Object $value    value to be saved against $key
     */
    public function __set($key, $value)
    {
        $this->$key = $value;
    }
    /*
     * gets value of a variable
     * 
     * this magic getter retrieves the value against property against $key
     * 
     * @param  Object $key    property name from which which we want to retrieve
     *                        value
     * @return Object $value  value against the $key
     */
    public function __get($key)
    {
        return $this->$value;
    }
    /*
     * returns the object of Registry class
     * 
     * this static checks the if the instance of Registry class is NULL then
     * return the new object and if not returns the already created object
     *
     * @return Registry instance object of Registry class
     */
    public static function getInstance()
    {
        if ($this->instance == NULL) {
            return new Registry();
        }
        return $this->instance;
    }
}
