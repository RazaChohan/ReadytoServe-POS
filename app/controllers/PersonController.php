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
     * @var string 'userName of user trying to login'
     */
    private $userName;

    /**
     * @var string 'password of user trying to login'
     */
    private $password;

    /**
     *
     * Constructor of class
     */
    public function __construct()
    {
        $this->view = new View();
    }

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
     * gets the request from callee.
     * 
     * @access public
     */
    public function getRequest($request)
    {
        $actionName = $request['action'] . 'Action';
        $this->$actionName($request);
    }

    /**
     * Displays Menu Depending Upon the Type of user.
     * 
     * @access private
     */
    private function showMainMenuAction($request)
    {
        IOAdapter::clearScreen();
        $viewObject = new View();
        $personType = Auth::getpersonType();
        $IOAdapterObject = IOAdapter::getInstance();

        $IOAdapterObject->makeOutput("\033[01;32m You Are Loged In "
                . "Successfully \033[0m" . PHP_EOL);

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
//        $menu=array('1'=>"Manage Products",
//                    '2'    )
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
                $request['controller'] = 'Person';
                $request['action'] = 'editAccountInfo';
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
     */
    public function editAccountInfoAction($request)
    {
        //$dba = DB_Adapter::getInstance();
        $io = IOAdapter::getInstance();
        $v = new View();
        $v->setScript("editAccountInfo.php");
        $io->makeOutput($v->render("Person", NULL));
        $io->makeOutput("\n >> Please Enter your new password : ");
        $pass1 = $io->getInput();
        $io->makeOutput("\n >> Please Re-enter your new password : ");
        $pass2 = $io->getInput();
        if ($pass1 === $pass2) {
            $personModel = new PersonModel();
            $personModel->updatePassword($pass1);
            $io->makeOutput("\n Password Updated");
        } else {
            $io->makeOutput("\n Password Doesn't match");
        }
        $request['controller'] = 'Person';
        $request['action'] = 'showMainMenu';
        $fc = FrontController::getInstance();
        $fc->direct($request);
    }

}
