<?php

class Application_Form_Login extends Zend_Form
{
    public function init()
    {
        $this->setName("login");
        $this->setMethod('post');


        $this->addElement('text', 'username', array(
            'filters' => array('StringTrim'),
            'placeholder' => 'Username',
            'autofocus' => 'true',
            'validators' => array(
                array('StringLength', false, array(1, 50)),
            ),
            'required' => true,
        ));

        $this->addElement('password', 'password', array(
            'filters' => array('StringTrim'),
            'prepend' => '<i class="form-control"></i>',
            'placeholder' => 'Password',
            'validators' => array(
                array('StringLength', false, array(8, 50)),
            ),
            'required' => true,
        ));


        $this->addElement('submit', 'login', array(
            'required' => false,
            'ignore' => true,
            'label' => 'Login',
        ));
//        $captcha = new Zend_Form_Element_Captcha('captcha');
//        $captcha
//                ->setCaptcha(new Captcha\Dumb())
//                ->setLabel('Please verify you are human');
//        
//         $this->add($captcha);
    }
    
   
}