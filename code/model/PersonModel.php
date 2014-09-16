<?php

class PersonModel
{
    public function authenticateUser($userName,$passWord){
        $dba= DB_Adapter::getInstance();
        $con=$dba->getConnection();
        if($con){
        	$query='SELECT username, DES_DECRYPT(password) from person'; 
            $result= $dba->fetchAll($query);
            while($row = mysqli_fetch_array($result)) {
            	//echo $row['username'] . $row['DES_DECRYPT(password)'];
            	if(trim($userName)===$row['username'] && trim($passWord)===$row['DES_DECRYPT(password)']){
            		return true;
            	}
			}
			return false;
        }
    }
}
