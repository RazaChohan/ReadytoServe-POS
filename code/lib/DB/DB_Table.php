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
     * returns the object of DB_Adapter
     * 
     * this function get the singleton instance of DB_Adapter and returns it
     * 
     * @return DB_Adapter object of DB_Adapter class
     */
    public function getAdapter(){
        return DB_Adapter::getInstance();
    }
    /*
     * deletes row/s from database
     * 
     * this function accepts a sql query to delete records from database and
     * returns the number of rows effected
     * 
     * @param String $deleteQuery sql qyery to delete records
     * 
     * @return integer number of rows deleted
     */
    public function delete($deleteQuery){
        $rowsEffected;
        return $rowsEffected;
    }
    /*
     * insert row in a table
     * 
     * this function accepts an array of values and table name, array contains
     * values to be added in columns in provided table
     * 
     * @param array $data        array contains values to be added in columns
     * @param String $tableName  table name
     */
    public function insert($data, $tableName){
        
    }
}
