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
        if ($con) {

            $query = "SELECT pr.name, od.order_id, od.order_datetime,
                      prd.product_description, odrline.unit_price,
                      odrline.quantity,odrline.discount, 
                      (odrline.unit_price*odrline.quantity-(odrline.quantity*odrline.discount)) as Amount 
                      FROM `order` as od
                     JOIN  `person` as pr ON od.salesman_id=pr.person_id
                     JOIN order_line_item as odrline ON od.order_id=odrline.order_id
                     JOIN product as prd ON prd.product_id=odrline.product_id
                     WHERE pr.person_id=od.salesman_id
                     group by odrline.order_id,odrline.order_line_item_id";

            $result = $dba->fetchAll($query);
            return $result;
        }
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
