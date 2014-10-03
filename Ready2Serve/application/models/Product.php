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
    public function getAllAvailableItems()
    {
        $db = Zend_Db_Table::getDefaultAdapter();
        if ($db) {
            $query = "select * from product where product_type='item' AND "
                    . "is_product_available='yes'";
            $result = $db->fetchAll($query);
            return $result;
        }
    }
    public function changeAvailabilityStatus($array)
    {
        $db = Zend_Db_Table::getDefaultAdapter();
        if ($db) {
            $ids = join(',', $array);
            $query = "update product set is_product_available = 'no' "
                    . "WHERE product_id IN($ids)";
            $db->query($query);
        }
    }
    public function addProduct($array)
    {
        $db = Zend_Db_Table::getDefaultAdapter();
        $productType = $array['productType'];
        $productAvailability = $array['productAvailability'];
        $productOrderability = $array['productOrderability'];
        $productName = $array['productName'];
        $productPrie = $array['productPrice'];
        if ($db) {
            $query = "INSERT INTO product (
                        product_id ,
                        product_type,
                        is_product_available,
                        is_product_oderable,
                        product_description,
                        product_price)
                        VALUES (NULL , '$productType', '$productAvailability', "
                    . "'$productOrderability', '$productName', "
                    . "'$productPrie');";
            $db->query($query);

            $lastId = $db->lastInsertId();
            return $lastId;
        }
    }
    public function addItemsInDeal($array, $productId)
    {
        $db = Zend_Db_Table::getDefaultAdapter();
        $count=0;
        if ($db) {
            foreach ($array as $key => $value) {
                
                if ($count==0) {
                    $temp = $key . 'q';
                    $query = "INSERT INTO product_contains_products (product_id "
                            . ",contained_product_id,quantity) "
                            . "VALUES ('$productId', '$key', '$array[$temp]');";
                    $db->query($query);
                    $count=$count+1;
                }
                else
                {
                    $count=0;
                }
            }
        }
    }
}