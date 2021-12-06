<?php

$a = $_POST['q'];
$b = $_POST['p'];
$c = $_POST['c'];
$d = $_POST['b'];
$e = $_POST['bs'];

$cm = $a*$b*$c;
$bo = $cm*b;
$gs = $e+$cm+$bo;

//(hint: commission=quantity*price*commission rate 
//bonus=commission*bonus rate
// gross salary=commission+bonus+base salary)

echo "Comission Is ".$cm;
echo "Bonus Is ".$bo;
echo "Gross Salary Is ".$gs;

?>