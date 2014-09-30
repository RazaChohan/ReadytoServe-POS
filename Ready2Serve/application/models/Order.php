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
}

        