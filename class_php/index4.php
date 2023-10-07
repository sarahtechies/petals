<?php

function myFunc(){
	$price = 10;
	echo $price;
}

//myFunc();
function myFuncTwo($age){
	echo $age;
}
//myFuncTwo(25);
//global variables

$name = 'sarah';

//function sayHello(){
//	global $name;
//	$name = 'Imole';
//	echo "hello $name";
//}
//sayHello();
//echo $name;

function sayBye($name){
	$name = 'kim';
	echo "bye $name";
}
sayBye($name);
echo $name;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>php tutorials</title>
</head>
<body>

</body>
</html>