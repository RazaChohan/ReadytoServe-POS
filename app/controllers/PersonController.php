<?php

/**
 * Contains definition of Person Controller class namely PersonController
 * 
 * This file contains one class implementation
 * named PersonController class.
 *
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */
/**
 * Contains Person Controller class
 *
 * This Class gets a specific request from the Dispatcher class
 * and performs functions according to the request.
 * 
 * @package Ready2Serve
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */
class PersonController
{
    /**
     * @var array of string 'Object of Order Model Class'
     */
    private $request;
    /**
     *
     * Gets the person type using Person Model Class
     * 
     * @access public
     * 
     * @param string $personUserName 'UserName of person'
     * 
     * @return string 'Person type'
     */
    public function getPersonType($personUserName)
    {
        
    }
    /**
     *
     * sets the person Password using Product Model Class
     * 
     * @access public
     * 
     * @param string $personUserName 'UserName of person'
     */
    public function setPersonPassword($personUserName)
    {
        
    }
    /**
     *
     * Gets the values from respective model class and passes the view class by 
     * calling its specific function and passing data.
     * 
     * @access public
     */
    public function updateView()
    {
        
    }
    /**
     * Displays Menu Depending Upon the Type of user.
     * 
     * @access private
     */
    public function showMainMenuAction()
    {
        //IOAdapter::clearScreen();
        $viewObject = new View();
        $personType = Auth::getpersonType();
        $IOAdapterObject = IOAdapter::getInstance();
        $personModel = new PersonModel();
        

        $response = null;
        if ($personType === "Salesperson") {
            $viewObject->setScript("salesPersonMainMenu.php");
            $response = $viewObject->render($this->request['controller'],
                                            NULL);
            $this->showResponse($response);
            $personModel->getSalesmanSelection();
        } else if ($personType === "Admin") {
            $viewObject->setScript("adminMainMenu.php");
            $response = $viewObject->render($this->request['controller'],
                                            NULL);
            $this->showResponse($response);
            $personModel->getAdminSelection();
        }
    }
    /**
     * Displays the response of the view script.
     * 
     * @access public
     */
    public function showResponse($response)
    {
        echo $response;
    }
    /**
     * edits the password of user
     * 
     * @param string $request 'Request to Action'
     */
    public function editAccountInfoAction()
    {
        $io = IOAdapter::getInstance();
        $fc = FrontController::getInstance();
        $personModel = new PersonModel();
        $v = new View();
        $v->setScript("editAccountInfo.php");
        $io->makeOutput($v->render("Person", NULL));
        $io->makeOutput("\n >> Please Enter your new password : ");
        $pass1 = $io->getInput();
        $io->makeOutput("\n >> Please Re-enter your new password : ");
        $pass2 = $io->getInput();
        if ($pass1 === $pass2) {
            $personModel->updatePassword($pass1);
            $io->makeOutput("\n \033[01;32m Password Updated \033[0m");
        } else {
            $io->makeOutput("\n \033[01;31m Password Doesn't match \033[0m");
        }
        $fc->direct(array('controller' => "Person",
            'action' => "showMainMenu"));
    }
    /**
     * sets the request data member of class.
     * 
     * @access public
     * 
     * @param array $requestParam 'Array of string containing request parameters'
     */
    public function setRequest($requestParam)
    {
        $this->request = $requestParam;
    }
}