<?php

$a = $_POST['s1'];
$b = $_POST['s2'];
$c = $_POST['s3'];
$d = $_POST['s4'];
$e = $_POST['s5'];
$f = $_POST['s6'];
$g = $_POST['s7'];

$total = $a+$b+$c+$d+$e+$f+$g;
$per = $total/7;

echo "Total Mark Is ".$total;
echo "<br><br>";
echo "Percentage Is ".$per;
echo "<br><br>";

?>