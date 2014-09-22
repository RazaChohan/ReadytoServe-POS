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
    public function showMainMenuAction($request)
    {
        //IOAdapter::clearScreen();
        $viewObject = new View();
        $personType = Auth::getpersonType();
        $IOAdapterObject = IOAdapter::getInstance();

        $response = null;
        if ($personType === "Salesperson") {
            $viewObject->setScript("salesPersonMainMenu.php");
            $response = $viewObject->render($request['controller'], NULL);
            $this->showResponse($response);
            $this->getSalesmanSelection();
        } else if ($personType === "Admin") {
            $viewObject->setScript("adminMainMenu.php");
            $response = $viewObject->render($request['controller'], NULL);
            $this->showResponse($response);
            $this->getAdminSelection();
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
     * gets Admin Selection from Menu and calls the respective controller
     * 
     * @access public
     */
    public function getAdminSelection()
    {
        $IOAdapterObject = IOAdapter::getInstance();
        $frontControllerObject = FrontController::getInstance();
        do {
            $iteration = false;
            $IOAdapterObject->makeOutput("\033[01;37m >> Please Enter Your Choice"
                    . " :\033[0m");
            $choice = $IOAdapterObject->getInput();
            if (intval($choice) == intval(1)) {
                $frontControllerObject->direct(array(
                    'controller' => "Product",
                    'action' => 'manageProducts'));
            } else if (intval($choice) == intval(2)) {
                echo "2 selected";
                $fc = FrontController::getInstance();
                $fc->direct(array('controller' => 'Person',
                    'action' => 'editAccountInfo'));
            } else if (intval($choice) == intval(3)) {
                $frontControllerObject->direct(array(
                    'controller' => "Order",
                    'action' => 'viewAllOrders'));
            } else if (similar_text($choice, 'x') == intval(1) ||
                    similar_text($choice, 'X') == intval(1)) {
                echo "4 selected";
            } else {
                echo $choice;
                echo similar_text($choice, 'x');
                $IOAdapterObject->makeOutput("\033[01;31m Error: Wrong Choice!!!"
                        . " :\033[0m");
                $iteration = true;
            }
        } while ($iteration);
    }

    /**
     * gets Salesman Selection from Menu and calls the respective controller
     * 
     * @access public
     */
    public function getSalesmanSelection()
    {
        $fc = FrontController::getInstance();
        $io = IOAdapter::getInstance();
        $io->makeOutput('Enter your choice : ');
        $choice = $io->getInput();
        if (intval($choice) == intval(1)) {
            
        } else if (intval($choice) == intval(2)) {
            $fc->direct(array('controller' => 'Person',
                'action' => 'editAccountInfo'));
        } else if (intval($choice) == intval(3)) {
            
        }
    }

    /**
     * edits the password of user
     * 
     * @param string $request 'Requet to Action'
     */
    public function editAccountInfoAction($request)
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

}
