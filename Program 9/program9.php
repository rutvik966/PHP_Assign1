<?php

$a = $_POST['n1'];
$b = $_POST['n2'];
$c = $_POST['n3'];


$a = $a + $b + $c; 
$b = $a - ($b + $c); 
$c = $a - ($b + $c); 
$a = $a - ($b + $c); 


echo "After Swap The Value Of A Is ".$c;
echo "<br><br>";
echo "After Swap The Value Of B Is ".$a;
echo "<br><br>";
echo "After Swap The Value Of C Is ".$b;
echo "<br><br>";


?>