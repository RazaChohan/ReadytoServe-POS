<?php

class Application_Model_Person
{
    private $_username;
    private $_password;
    
    public function editAccountInfo($values){
        $this->_password=$values['password'];
        $this->_username=  Zend_Auth::getInstance()->getIdentity()->username;
        $query="update person set password = '$this->_password' where "
                . "username = '$this->_username'";
        
//        "SELECT * FROM '$quiz_name'"
//        $data = mysql_query($query);
       
        //update person set password ='12345678' where username = 'admin_man'
        $db=Zend_Db_Table::getDefaultAdapter();
        if($db){
            $db->query($query);
            
            return true;
        }
        return false;
    }

}

