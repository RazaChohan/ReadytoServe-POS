<?php

class Application_Model_Person
{
    private $_username;
    private $_password;
    
    public function editAccountInfo($values){
        $this->_password=$values['password'];
        $this->_username=  Zend_Auth::getInstance()->getIdentity();
        $query='update person set password = '.$this->_password.' where '
                . 'username = '.$this->_username;
        $db=Zend_Db_Table::getDefaultAdapter();
        if($db){
            $db->query($query);
            
            return true;
        }
        return false;
    }

}

