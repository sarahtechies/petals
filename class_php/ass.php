<?php

//$products = [
//['name' => 'mary', 'age' => 20],
//['name' => 'kim', 'age' => 60],
//];

//foreach ($products as $product) {
	
	//if($product['name'] === 'tolu'){
//break;
//}

//if($product['age']>100){
//}
//}

//function sayHello($name = 'shaun' , $time = 'morning'){
	//echo "good $time $name";
//}

//sayHello('tolu','night');
//function formatProduct($product){
//echo "{$product['name']} costs N{$product['price']} to buy <br />";
	//return "{$product['name']} costs N{$product['price']} to buy <br />";
//}
//$formatted = formatProduct(['name'=>'corn', 'price'=>20]);
//echo $formatted;
$dob =  '2023-07-17';
$t = strtotime($dob);
$birthday = date('jS F, Y h:i A', $time);
echo $birthday;
$dob =  '2023-07-17';
$t = strtotime($dob);
$birthday = date('jS F, Y h:i A');
echo $birthday;
?>