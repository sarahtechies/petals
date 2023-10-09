<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "schoolportal";


$db = new mysqli('localhost', 'root', '', 'chatapp');



if (!$db)  {

    die(mysqli_error($db));
}

class Profile{
    function __construct() {
       
    }


public function signUp($name, $email, $phonenumber, $password){
    global $db;
    
    $pass = password_hash($password, PASSWORD_BCRYPT);
    
    $sql = $db->query("INSERT INTO user(name, email, phone, password) VALUES ('$name', '$email', '$phonenumber', '$pass')");
    if($sql){echo "operation Succesful";}
    
}

}

$pro = new Profile();

if(isset($_GET['type'])){extract($_GET);
   if($type == 'signup'){$pro->signUp($name, $email, $phonenumber, $password); }
}
 //$pro->signUp('akintade', 'sarah@gmail.com', '08020272790', '123456');
?>