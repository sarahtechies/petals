<?php
echo "<table border='1' bgcolor='fushiapink'>";
for ($i=1; $i <=50 ; $i++) { 

   echo "<tr>"; 
   for ($m=1; $m <=30 ; $m++) {
    $x =$i*$m;
     //if ($x%2!=0){
      //$x=""  ;
    
    if($x%2==0) {$col = 'yellow';}
    elseif ($x%3==0) 
      {$col = 'orange';}
    

   elseif($x%11==0) {$col = 'gold';}
   elseif ($x%5==0) 
   {$col = 'lightblue';}
 

   elseif($x%7==0) {$col = 'white';}
 echo "<td bgcolor=" .$col. ">" . $x. "</td>";

   }
   
  echo "</tr>";
}
echo "</table>"
?>