<?php

class Application_Model_Product
{
    public function getAllProducts()
    {
        $db = Zend_Db_Table::getDefaultAdapter();
        if ($db) {
            $query = 'select * from product';
            $result = $db->fetchAll($query);
            return $result;
        }
    }
    public function changeAvailabilityStatus($array)
    {
        $db = Zend_Db_Table::getDefaultAdapter();
        if ($db) {
            $ids = join(',',$array);
            $query = "update product set is_product_available = 'no' "
                    . "WHERE product_id IN($ids)";
            $db->query($query);
        }
    }
}