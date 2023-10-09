<?php

$con = new mysqli('localhost', 'root', '', 'chatapp');

class Profile{
    function __construct() {
        if(array_key_exists('Login', $_POST)) {
            $this->Login();
            }
        elseif (array_key_exists('signup', $_POST)) {
                $this->signup();                 
        }
    }


public function signUp($name, $email, $phonenumber, $passsword){
    global $con;
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phonenumber'];
    $password = $_POST['password'];
    $sql = $con->query"INSERT INTO user(name, email, phonenumber, password) VALUES ('$name', '$email', '$phonenumber', '$password')";
    $pass = password_hash($password, PASSWORD_BCRYPT);
}

}

?>