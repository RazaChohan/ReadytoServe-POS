<?php

/**
 * Contains definition of Oauth Controller class namely OauthController
 * 
 * This file contains one class implementation
 * named OauthController class.
 *
 * @category Training/Learning PHP
 * @package Ready2Serve
 * @version v 1.0
 */
/**
 * Contains Oauth Controller class
 *
 * This Class gets a specific request from the Dispatcher class
 * and performs functions according to the request.
 * 
 * @package Ready2Serve
 * @author Muhammad Raza <muhammad.raza@coeus-solutions.de>
 * @category Training/Learning PHP
 * @version v 1.0
 */
class OauthController
{
    
    /**
     * @var object 'Object of Order Model Class'
     */
    private $personModel;
    /**
     * @var Boolean 'Is user Authenticated'
     */
    private $IsAuthenticated;
    /**
     * @var object 'Object of Order Model Class'
     */
    private $numberOfWrongAttempts;

    /**
     * Constructor of class
     */
    public function __construct()
    {
        $this->personModel = new PersonModel();
        $this->numberOfWrongAttempts = intval(0);
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
     *
     * authenticates the user using person Model Class
     * 
     * @access private
     * 
     * @param string $username 'Username of Person'
     * 
     *        string $password 'Password of Person'
     */
    private function authenicateUserfromModel($username, $password)
    {
        $this->IsAuthenticated = $this->personModel->
                authenticateUser($username,$password);
        return $this->IsAuthenticated;
    }
    /**
     * checks whether user is authenticated or not
     *
     * @return Boolean whether ture or false, depends on authentication
     *
     * @access public
     */
    public static function isAuthenticUser()
    {
        
    }
    /**
     * Login user action function that will call the view object.
     * 
     * @access public
     */
    public function loginUserAction($request)
    {
        $io=  IOAdapter::getInstance();
        if ($this->numberOfWrongAttempts >= intval(3)) {
            $io->makeOutput("\033[01;31m  Maximum Wrong Authentication"
                    . " Limited Reached!!! \033[0m".PHP_EOL);
            exit(1);
        } else if ($this->numberOfWrongAttempts == intval(0)) {
            $viewObject = new View();
            $request['View'] = "welcome.php";
            $response = $viewObject->render($request['View'],
                    $request['controller']);
            $this->showResponse($response);
        }

        $IOAdapterObject = IOAdapter::getInstance();
        $username = $IOAdapterObject->getInput();
        $io->makeOutput( ">> Please Enter Your Enter Password: ");
        $password = $IOAdapterObject->getInput();
       
        $chk = $this->authenicateUserfromModel($username, $password);

        if ($chk) {
            echo 'You Are Loged In Successfully' . PHP_EOL;
            $request['controller']="Person";
            $request['action']="showMainMenu";
            $frontControllerObject = FrontController::getInstance();
            $frontControllerObject->direct($request);
        } else {
            $io->makeOutput('Error: Wrong username or Password' . PHP_EOL);
            $this->numberOfWrongAttempts = $this->numberOfWrongAttempts
                    + intval(1);
            if($this->numberOfWrongAttempts<3)
            {
            $io->makeOutput( " >> Please Enter Your User Name : ");
            }
            $this->loginUserAction($request);
        }
    }
    /**
     * Login user action function that will call the view object.
     * 
     * @access public
     */
    public function getRequest($request)
    {
        if ($request['action'] === "loginUser") {
            $this->loginUserAction($request);
        }
    }
    /**
     * Displays the response of the view Script
     * 
     * @access public
     */
    public function showResponse($response)
    {
        echo $response;
    }
}