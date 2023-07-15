<?php

namespace Input\Validation;
class Validate{
    public $name;
    public $email;
    public $number;
    private $password;

    function __construct($name,$email,$number,$password){
        $this->name = $name;
        $this->email = $email;  
        $this->number =  $number;
        $this->password =  $password;
    }
    function validate_name(){
        $name = $this->name;
        $name = stripslashes($name);
        $name = filter_var($name,FILTER_SANITIZE_STRING);
        return $name;
    }

    function validate_email(){
        $email = $this->email;
        $email = filter_var($email,FILTER_VALIDATE_EMAIL);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        return $email;
    }

    function validate_number(){
        $number = $this->number;
        $number = filter_var($number, FILTER_SANITIZE_NUMBER_INT);
        $number = filter_var($number, FILTER_VALIDATE_INT);
        return $number;
    }
    function password_hash(){
        $password = $this->password;
        $password = password_hash($password,PASSWORD_DEFAULT);
        return $password;
    }

}


?>