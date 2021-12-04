<?php

$a = $_POST['n1'];
$b = $_POST['n2'];

$a = $a + $b;
$b = $a - $b;
$a = $a - $b;

echo "After Swap The Value Of A Is ".$a;
echo "<br><br>";
echo "After Swap The Value Of B Is ".$b;
echo "<br><br>";

?>