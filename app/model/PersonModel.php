<?php

/*
 * Contains implementation of PersonModel class.
 * 
 * This file contains the implementaion of PersonModel class
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */
/*
 * perfoms Person's actions and maps to the table in DB
 * 
 * This class performs action related to the Person model and maps the
 * 
 * @package Ready2Serve
 * @author Tayyab Hussain <tayyab.hussain@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */

class PersonModel
{
    /*
     * @var Boolean $isAuthenticated to keep the record about authentication
     */
    private $isAuthenticated;
    /*
     * authenticates the person
     * 
     * this function takes username and password and authenticate if username
     * and password is valid or not.
     * 
     * @return Boolen true if user valid otherwise false
     */

    public function authenticateUser($userName, $passWord)
    {
<<<<<<< HEAD

=======
>>>>>>> 44884744050a0742dc7ecddd3a8a2b5133eb9684
        $dba = DB_Adapter::getInstance();
        $con = $dba->getConnection();
        if ($con) {

            $query = "SELECT person_type, username, DES_DECRYPT(password)"
                    . "from person where username='" . $userName . "'"
                    . "AND DES_DECRYPT(password)='" . $passWord . "'";

            $row = $dba->fetchRow($query);
            if (count($row) > 0) {

                Auth::setAuthDataMembers($row['username'], $row['person_type'], TRUE);
                $this->isAuthenticated = true;
                return true;
            } else {
                return false;
            }
        }
    }
    /**
     * updates user's password
     * 
     * this function accpets a password and update the previous one of the user
     * who is loged in that time
     * 
     * @param string $newPassword new password
     */
    public function updatePassword($newPassword)
    {
        $reg = Registry::getInstance();
        $query = "update person set password = DES_ENCRYPT('" . $newPassword . "')"
                . " where username = '" . AUTH::getUserName() . "'";
        $dba = DB_Adapter::getInstance();
        $dba->executeQuery($query);
    }

}
