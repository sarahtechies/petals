

<table border = "1" align="center" width="100%" style="text-align: center;">;
<?php

$num = 5;
for($i = 1; $i <=$num; $i++ )
    
   {
    echo "<tr>";

    for($y = 1; $y <=$num; $y++ )
   {
    $class = ($i * $y);
    echo "<td>$y x $i = $class</td>";
   }
   echo "</tr>";
}

?>
</table>;