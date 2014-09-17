<?php

/*
 * This file contains implementation of View
 * 
 * @package ready2Serve
 * @version 1.0
 */
/**
 * Prints required view script on console
 *
 * @package ready2Serve
 * @author  Jamshad Ahmad <jamshad.ahmad@coeus-solutions.de>
 * @version 1.0
 */
class View
{
    /*
     * @var array associative array to store key value pares
     */
    private static $data = array();
    /*
     * @var string string containing name of current script to render
     */
    private $currentScript = NULL;
    /**
     * Executes specifc view script
     *
     * Gets paramater from FC::getRequest() and executes specific View script
     *
     * @return string returns output of a script
     *
     * @access public
     */
    public function setViewScriptPath($viewScript, $controller)
    {
        $path = realpath('views/' . $controller . 'Controller/' . $viewScript);
        return $path;
    }
    /**
     * Executes specifc view script
     *
     * Gets paramater from FC::getRequest() and executes specific View script
     *
     * @return string returns output of a script
     *
     * @access public
     */
    public function render($controller,$param)
    {
        $completePath = $this->setViewScriptPath($this->currentScript, $controller);
        ob_start();
        include $completePath;
        $contents = ob_get_contents();
        ob_end_clean();
        return $contents;
    }
    /*
     * sets value to an index of data array
     * 
     * this magic setter recieves two parameters and add a new index into data array
     * 
     * @param Object $key      new property of Registry class
     * @param Object $value    value to be saved against $key
     */
    public function __set($key, $value)
    {
        self::$data[$key] = $value;
    }
    /*
     * gets value of an index from data array
     * 
     * this magic getter retrieves the value from data array against $key
     * 
     * @param  Object $key    property name from which which we want to retrieve
     *                        value
     * @return Object $value  value against the $key
     */
    public function __get($key)
    {
        return self::$data[$key];
    }
    /*
     * sets the name of view script that needs to be rendered
     * 
     * 
     * 
     * @param string $scriptName      view script name
     */
    public function setScript($scriptName)
    {
        $this->currentScript=$scriptName; 
    }
}