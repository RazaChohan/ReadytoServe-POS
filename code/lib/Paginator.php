<?php

namespace Ready2toServe;
/**
 * Contains definition of Paginator class namely Paginator
 * 
 * This file contains one class implementation
 * named Paginator class.
 *
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */
/**
 * Contains Paginator class
 *
 * This Class gets a limit for displaying number of records per page and array
 * that needs to be displayed and eventually displays specified number of 
 * records per page.
 * 
 * @package Ready2Serve
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */
class Paginator
{
    /**
     * @var integer 'Number of records to display on one page'
     */
    private $limit;
    /**
     *
     * Gets the value of limit and data to divide the output and print it 
     * on screen.
     * 
     * @access public
     * 
     * @param array   $data 'data to display'
     *        integer $limit 'number of records to display on one page'
     *         
     */
    public function pagination($limit,$data)
    {
        
    }
}
