<?php
echo "<table border='1' bgcolor='red'>";
for ($i=1; $i <=50 ; $i++) { 

   echo "<tr>"; 
   for ($m=1; $m <=30 ; $m++) {
    $x =$i*$m;
     //if ($x%2!=0){
      //$x=""  ;
    
    if($x%2==0) {$col = 'yellow';}
    elseif ($x%3==0) 
      {$col = 'red';}
    

   elseif($x%11==0) {$col = 'grey';}
   elseif ($x%5==0) 
   {$col = 'red';}
 

   elseif($x%7==0) {$col = 'green';}
 echo "<td bgcolor=" .$col. ">" . $x. "</td>";

   }
   
  echo "</tr>";
}
echo "</table>"
?>