<?php

/*
 * Contains implementation of OrderModel class.
 * 
 * This file contains the implementaion of OrderModel class
 * 
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */
/*
 * Provides data to Order Controller by interacting with DBAdapter
 * 
 * This class performs action related to the Order model
 * 
 * @package Ready2Serve
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */
class OrderModel
{
    /*
     * Get all orders from Database
     * 
     * this function queries the database and gets all the orders in the 
     * database and renders the view script that will display it
     * 
     * @return array 'Containing all Orders'
     */
    public function getAllOrders()
    {
        $dba = DB_Adapter::getInstance();
        $con = $dba->getConnection();
//        if ($con) {
//
//            $query = "SELECT person_type, username, DES_DECRYPT(password)"
//                    . "from person where username='" . $userName . "'"
//                    . "AND DES_DECRYPT(password)='" . $passWord . "'";
//
//            $result = $dba->fetchAll($query);
//            $row = mysqli_fetch_array($result);
//            if (count($row) > 0) {
//                self::$personType = $row['person_type'];
//                $this->isAuthenticated = true;
//                return true;
//            } else {
//                return false;
//            }
//        }
    } 
    /*
     * Get all orders from Database
     * 
     * this function queries the database and gets all the orders in the 
     * database and renders the view script that will display it
     * 
     */
    public function getBetweenDatesOrders()
    {
        $dba = DB_Adapter::getInstance();
        $con = $dba->getConnection();
        if ($con) {

            $query = "SELECT person_type, username, DES_DECRYPT(password)"
                    . "from person where username='" . $userName . "'"
                    . "AND DES_DECRYPT(password)='" . $passWord . "'";

            $result = $dba->fetchAll($query);
            $row = mysqli_fetch_array($result);
            if (count($row) > 0) {
                self::$personType = $row['person_type'];
                $this->isAuthenticated = true;
                return true;
            } else {
                return false;
            }
        }
    }
}