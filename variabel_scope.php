<!DOCTYPE html>
<html>
<body>

<?php
$x = 5; 

function ujiCoba1() {
  echo "<p>Variabel x di dalam fungsi tidak bisa diakses tanpa menggunakan 'global'.</p>";
} 
ujiCoba1();

echo "<p>Variabel x di luar fungsi adalah: $x</p>";

function ujiCoba2() {
  $x = 5;
  echo "<p>Variabel x di dalam fungsi adalah: $x</p>";
} 
ujiCoba2();

echo "<p>Variabel x di luar fungsi adalah: $x</p>";

$x = 5;
$y = 10;

function ujiCoba3() {
  global $x, $y;
  $y = $x + $y;
}
ujiCoba3();
echo "<p>Hasil dari variabel global \$y: $y</p>";

$x = 5;
$y = 10;

function ujiCoba4() {
  $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
}
ujiCoba4();
echo "<p>Hasil dari penggunaan \$GLOBALS['y']: $y</p>";

function ujiCoba5() {
  static $x = 0;
  echo "<p>Nilai static x: $x</p>";
  $x++;
}

ujiCoba5();
ujiCoba5();
ujiCoba5();
?>

</body>
</html>
