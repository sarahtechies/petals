<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "schoolportal";


$db = new mysqli('localhost', 'root', '', 'chatapp');



if (!$con)  {

    die(mysqli_error($con));
}

class Profile{
    function __construct() {
       
    }


public function signUp($name, $email, $phonenumber, $password){
    global $db;
    
    $pass = password_hash($password, PASSWORD_BCRYPT);
    
    $sql = $db->query("INSERT INTO user(name, email, phone, password) VALUES ('$name', '$email', '$phonenumber', '$pass')");
    
}

}

$pro = new Profile();

if(isset($_GET['type'])){extract($_GET);
   if($type == 'signUp'){$pro->signUp($name, $email, $phone, $pass);}
}
// $pro->signUp('akintadesarah', 'sarah@gmail.com', '08020272790', '123456');
?>