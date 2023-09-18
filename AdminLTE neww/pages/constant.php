<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "schoolportal";


$con = new mysqli('localhost', 'root', '', 'schoolportal');



if (!$con)  {

    die(mysqli_error($con));
}
?>