<?php

/**
 * This file contains implementation of IOAdapter class
 * 
 * @package Ready2Serve
 * @version 1.0
 */
/**
 * prompts user to input
 * 
 * This is singleton class that asks user to input something and send back that
 * input to caller.
 * 
 * @package Ready2Serve
 * @author Tayyab Hussain <tayyab.hussain@coeus-solutions.de>
 * @version 1.0
 */
class IOAdapter
{
    /*
     * @var IOAdapter $handler the signle object of IOAdapter
     */
    private static $handler;

    /**
     * prompts user to input
     * 
     * this function prompts user to input something and return back that input
     * to the caller
     * 
     * @return String input that has been recieved from user
     */
    public function getInput()
    {
        $input = fgets(STDIN);
        return trim($input);
    }
    /**
     * returns the object of IOAdapter class
     * 
     * this static function checks if the instance of IOAdapter class is NULL
     * then return the new object and if not returns the already created object
     *
     * @return IOAdapter instance object of IOAdapter class
     */
    public static function getInstance()
    {
        if (self::$handler == NULL) {
            self::$handler = new IOAdapter();
        }
        return self::$handler;
    }
    /**
     * shows output
     * 
     * this method accepts one paramater and displays
     * 
     * @param String $output output string to display
     */
    public function makeOutput($output)
    {
        echo $output;
    }
    /*
     * Checks for the Operating System and clears the screen
     * 
     */
    public static function clearScreen()
    {
        if (PHP_OS === 'Linux') {
            passthru('clear');
        } else if (PHP_OS === 'Windows') {
            passthru('cls');
        }
    }
    /**
     * gets input from user
     * 
     * This function gets input from user in a loop until user does not provide
     * input from the givien option
     * 
     * @param String  $msg    This is message to be displayed
     * @param Array   $array  associative array contains options on specific
     *                        keys
     * 
     * @return String $value  value to be returned
     */
    public function getSelection($msg, $array)
    {
        do {
            $isNotCorrectSelection=false;
            $io = IOAdapter::getInstance();
            while (true) {
                $io->makeOutput($msg);
                $input = $io->getInput();
                $chk = array_key_exists($input, $array);
                if ($chk) {
                    $value = $array[$input];
                    return $value;
                } else {
                    $isNotCorrectSelection=true;
                }
            }
        } while ($isNotCorrectSelection);
    }
}