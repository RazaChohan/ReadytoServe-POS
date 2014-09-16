<?php
/*
 * This file contains DB_Adapter class
 * 
 * This file contains the implementions of DB_Adapter class that we need to
 * deal with our database
 * 
 * @package Ready2Serve
 * @version 1.0
 */

/*
 * deals with database
 * 
 * This is singleton class deal with database by creating a single connection
 * with database and use it.
 * 
 * @package Ready2Serve
 * @author Tayyab Hussain <tayyab.hussain@coeus-solutions.de>
 * @version 1.0
 */
class DB_Adapter
{
    
    /*
     * @var DBConnection of DB_Adapter class
     */
    private $connection;
    /*
     * @var instance of DB_Adapter class
     */
    private static $instance;
    /*
     * instantiate the DB_Adapter class
     * 
     * the constructor of DB_Adapter class is private because DB_Adapter is
     * singleton class and not to be instantiate from any other class
     */
    private function __construct()
    {
        
    }
    /*
     * returns the object of DB_Adapter class
     * 
     * this static function checks if the instance of DB_Adapter class is NULL
     * then return the new object and if not returns the already created object
     *
     * @return DB_Adapter instance object of DB_Adapter class
     */
    public static function getInstance()
    {
        if (self::$instance== NULL) {
            self::$instance=new DB_Adapter();
        }
        return self::$instance;
    }
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
        $result=mysql_query($query,$this->connection);
	// associative array contains all table data
	return $result;
    }
    /*
     * creates connection with database
     * 
     * this function created connection with database and return the connectoin
     * object.
     * 
     * @return DBConnection  connection to database
     */
    public function getConnection()
    {
        if($this->connection==NULL){
       //     $this->connection=new mysqli($host, $user, $password, $database, $port, $socket)
            return $this->connection;
        }
        return $this->connection;
    }
    /*
     * closes the connection with database
     * 
     * this function closes the coonection with data base
     */
    public function closeConnection(){
        $this->connection->close();
    }
}
