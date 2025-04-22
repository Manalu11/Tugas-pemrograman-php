<!DOCTYPE html>
<html>
<body>

<?php
define("SALAM", "Selamat datang di W3Schools.com!");
echo SALAM;

const MOBIL_SAYA = "Volvo";
echo MOBIL_SAYA;

define("MOBIL", [
    "Alfa Romeo",
    "BMW",
    "Toyota"
]);
echo MOBIL[0];

function ujiCoba() {
  echo SALAM;
}

ujiCoba();
?> 

</body>
</html>
