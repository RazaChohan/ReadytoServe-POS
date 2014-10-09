<?php

class Application_Model_Order
{
    protected $_salesmanName;
    protected $_orderID;
    protected $_orderDateTime;
    protected $_productDescription;
    protected $_unitPrice;
    protected $_quantity;
    protected $_discount;

    public function getAllOrders()
    {
        $db = Zend_Db_Table::getDefaultAdapter();

        if ($db) {

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

            $result = $db->fetchAll($query);
            return $result;
        }
    }
    public function placeOrder($values, $products)
    {
        $salesManId = Zend_Auth::getInstance()->getIdentity()->person_id;
        $date = date('Y-m-d H:i:s');
        $db = Zend_Db_Table::getDefaultAdapter();

        $query = "INSERT INTO `order` "
                . "(`order_id` ,`salesman_id` ,`order_datetime`)"
                . "VALUES (NULL ,  '$salesManId',  '$date');";
        $db->query($query);

        for ($i = 0; $i < count($values[0]); $i++) {

            $need = array();
            for ($j = 0; $j < 3; $j++) {
                array_push($need, $values[$j][$i]);
            }
            $p_id = $need[0];
            $p_quntity = $need[1];
            $p_discount = $need[2];
            $p_price = $products['product_price'];
            $query = "inseret into order_line_item values ("
                    . "'$p_id','$p_quntity','$p_discount')";
        }
        //order_id 	product_id 	unit_price 	quantity 	discount       
    }
}