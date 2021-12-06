<?php

$a = $_POST['q'];
$b = $_POST['p'];
$c = $_POST['c'];
$d = $_POST['b'];
$e = $_POST['bs'];

$cm = $a * $b * $c;
$bonus = $cm * $b;
$gs = $e + $cm + $bonus;

//(hint: commission=quantity*price*commission rate 
//bonus=commission*bonus rate
// gross salary=commission+bonus+base salary)

echo "Comission Is ".$cm;
echo "<br><br>";
echo "Bonus Is ".$bonus;
echo "<br><br>";
echo "Gross Salary Is ".$gs;
echo "<br><br>";

?>
