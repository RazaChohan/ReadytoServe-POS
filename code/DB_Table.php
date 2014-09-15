<?php
namespace Ready2Serve;
/*
 * This file contains DB_Table class
 * 
 * This file contains the implementions of DB_Table class which has some general
 * properties and behaviors.
 * 
 * @package Ready2Serve
 * @version 1.0
 */

/*
 * deals with database
 * 
 * DB_Table is an abstract class which will be extended by other model classes.
 * DB_Table class contains some general properties and behaviors that will be 
 * available in child classes.
 *
 * @package Read2Serve
 * @author Tayyab Hussain <tayyab.hussain@coeus-solutions.de>
 * @version 1.0
 */
abstract class DB_Table
{
    
    /*
     * @var DB_Adapter instance of DB_Adapter class
     */
    private $dbAdapter;
    /*
     * @var Paginator instance of Paginator class
     */
    private $paginator;
    
    /*
     * fetches all the records from database
     * 
     * this function fetches all the records from the database on the basis of 
     * sql query
     *
     * @param  String $query sql query 
     * 
     * @return array  array containing the resultset
     */
    public function fetchAll($query)
    {
        
    }
    /*
     * creats an object of Paginator
     * 
     * this function creates an object of Paginator and returns
     * 
     * @return Paginator  array containing the resultset
     */
    public function getPaginator()
    {
        return $this->paginator;
    }
    
}
