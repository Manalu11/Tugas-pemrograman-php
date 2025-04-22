<!DOCTYPE html>
<html>
<body>

<?php
$x = "Halo Dunia<br>!";
echo strtoupper($x);
$x = "Halo Dunia<br>!";
echo strtolower($x);
$x = "Halo Dunia!<br>";
echo str_replace("Dunia", "Teman", $x);
$x = "Halo Dunia!";
echo strrev($x);
$x = " Halo Dunia! ";
echo trim($x);
$x = "Halo Dunia!";
$y = explode(" ", $x);

print_r($y);
?> 

</body>
</html>
