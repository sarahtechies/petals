<?php

 echo"<table border ='1'>"
for ($i=1; $i <=30 ; $i++) { 
  echo "<tr>";

  for ($g=1; $g <=35 ; $g++) { 
    $x= $i * $g;

    echo "<td>" . $x. "</td>";
  }
echo "</tr>";
}

 echo"</table>"
?>