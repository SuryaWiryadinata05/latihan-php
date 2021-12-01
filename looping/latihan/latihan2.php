<?php

$a=3;
$j=3;
for($i = 1;$i <= 10;$i++){
    echo "<br>";
    for($k=$a;$k <= $j; $k++){
    echo " $k ";   
    }
    $a += 2;
    $j += 3;
}
?>