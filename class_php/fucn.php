<?php


//function addNum($x, $y){
	 
	//echo($x +$y) . "<br>";
//}
//addNum(50, 400);
 
//addNum(1000, 200);

 //echo "<hr>";
//function multiplyNum($x, $y){
	//echo($x * $y) . "<br>";
//}
//multiplyNum(1262, 80);
 //echo "</hr>";

//u = 4, a = 2, t = 6, s = 3;

//v=u+at;
function motionEqu($u,$a,$t){
   $v=$u+($a*$t) . "<br>";
echo $v;
}
motionEqu(4,2,6);

//v^2=u^2+2as;
function motionEqu2($u,$a,$s){
	$v=sqrt($u^2+2*($a*$s)) . "<br>";
	echo $v;
}
motionEqu2(4,2,6);

//s=ut+1/2at^2;
function motionEqu3($u,$t,$a){
	$s= $u*$t+(0.5*$a*pow($t, 2)). "<br>";
	echo $s;
}
motionEqu3(4,6,2,);

//2x^2+3x-4=0;
//x= -b+ root(b^2 -4ac)/2a;
//y= -b+ root(b^2 -4ac)/2a;
function quaEqu($a,$b,$c){
	$x= (-$b+sqrt($b**2-4*$a*$c))/(2*$a);
	echo "the first value of x is $x" . "<br>";
	$y= (-$b-sqrt(pow($b, 2)-4*$a*$c))/(2*$a);
	echo "the second value of x is $y" . "<br>";
}
quaEqu(2,3,-4);
?>