<?php
$db = new mysqli('localhost', 'root', '', 'chatapp');


class Profile{
 function __construct(){
  

 }

 function SignUp($name, $email, $picture, $phone, $password){
  global $db;
  $pass = password_hash($password, PASSWORD_BCRYPT);
  $sql = $db->query("SELECT * FROM user WHERE email = '$email' AND phone ='$phone'  ");
  if(mysqli_num_rows($sql) > 0){
   echo "email or phone already exist";
  }else{
   $sql = $db->query("INSERT INTO user (name, email, picture, phone, password) VALUES('$name', '$email', '$picture', '$phone', '$pass')");
   if ($sql) {
    echo "operation successful";
   }
  };
  
 }


 function LogIn($email, $password){
    global $db;
    $sql = $db->query("SELECT * FROM user WHERE email = '$email'");
    if(mysqli_num_rows($sql) != 1)
     echo "invalid login";
    return;

    $rows = mysqli_fetch_assoc($sql);
    if(password_verify($password, $rows['password'])){
        $_SESSION['id'] = $rows['id'];
       
        echo 'success';
        return;
    }
    echo 'invalid login';
    return;
 }
};

$pro = new Profile();
if(isset($_GET['type'])){extract($_GET);
 if($type=='signup'){$pro->SignUp($name, $email, $picture, $phone, $password);
 }
}

if(isset($_GET['type'])){extract($_GET);
 if($type=='login'){$pro->LogIn($email, $password);
 }
}


