<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
var_dump($x);
$x = "Halo dunia!";
$y = 'Halo dunia!';

var_dump($x);
echo "<br>";
var_dump($y);
$x = 5985;
var_dump($x);
$x = 10.365;
var_dump($x);
$x = true;
var_dump($x);
$mobil = array("Volvo", "BMW", "Toyota");
var_dump($mobil);
class Mobil {
    public $warna;
    public $model;
    public function __construct($warna, $model) {
      $this->warna = $warna;
      $this->model = $model;
    }
    public function pesan() {
      return "Mobil saya adalah " . $this->warna . " " . $this->model . "!";
    }
}
  
$mobilSaya = new Mobil("merah", "Volvo");
var_dump($mobilSaya);
$x = "Halo dunia!";
$x = null;
var_dump($x);
$x = 5;
var_dump($x);

$x = "Halo";
var_dump($x);
$x = 5;
$x = (string) $x;
var_dump($x);
?>

</body>
</html>
