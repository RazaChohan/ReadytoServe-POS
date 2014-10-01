<?php

class Application_Model_Product
{
    
    public function getAllProducts(){
        $db = Zend_Db_Table::getDefaultAdapter();
        if($db){
            $query='select * from product';
            $result=$db->fetchAll($query);
            return $result;
        }
    }
}

