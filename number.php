<!DOCTYPE html>
<html>
<body>

<?php
$a = 5;
$b = 5.34;
$c = "25";

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);

$x = 5985;
var_dump(is_int($x));

$x = 59.85;
var_dump(is_int($x));

$x = 10.365;
var_dump(is_float($x));

$x = 1.9e411;
var_dump($x);

$x = acos(8);
var_dump($x);

$x = 5985;
var_dump(is_numeric($x));

$x = "5985";
var_dump(is_numeric($x));

$x = "59.85" + 100;
var_dump(is_numeric($x));

$x = "Halo";
var_dump(is_numeric($x));

$x = 23465.768;
$int_cast = (int)$x;
echo $int_cast;

echo "<br>";

$x = "23465.768";
$int_cast = (int)$x;
echo $int_cast;
?> 

<p>Pemisah baris ditambahkan untuk keterbacaan yang lebih baik.</p>

</body>
</html>
