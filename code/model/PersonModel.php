<?php

class PersonModel
{
    private static $personType=null;
    
    private $isAuthenticated;
    
    public static function getPersonType()
    {
        return self::$personType;
    }
    
    public function authenticateUser($userName, $passWord)
    {
        $userName = trim($userName);
        $passWord = trim($passWord);

        $dba = DB_Adapter::getInstance();
        $con = $dba->getConnection();
        if ($con) {

            $query = "SELECT person_type, username, DES_DECRYPT(password)"
                    . "from person where username='" . $userName . "'"
                    . "AND DES_DECRYPT(password)='" . $passWord . "'";


            $result = $dba->fetchAll($query);
            $row = mysqli_fetch_array($result);
            if(count($row)>0)
            {
                self::$personType=$row['person_type'];
                $this->isAuthenticated=true;
                return true;
            }
            else
            {
                return false;
            }                
        }
    }  
}