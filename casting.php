<!DOCTYPE html>
<html>
<body>

<pre>
<?php
$a = 5;
$b = 5.34;
$c = "halo";
$d = true;
$e = NULL;

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);

$a = 5;
$b = 5.34;
$c = "25 kilometer";
$d = "kilometer 25";
$e = "halo";
$f = true;
$g = NULL;

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

$a = 5;
$b = 5.34;
$c = 0;
$d = -1;
$e = 0.1;
$f = "halo";
$g = "";
$h = true;
$i = NULL;

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

$a = 5;
$b = 5.34;
$c = "halo";
$d = true;
$e = NULL;

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

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
$mobilSaya = (array) $mobilSaya;
var_dump($mobilSaya);

$a = 5;
$b = 5.34;
$c = "halo";
$d = true;
$e = NULL;

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

$a = array("Volvo", "BMW", "Toyota");
$b = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

$a = (object) $a;
$b = (object) $b;

$a = 5;
$b = 5.34;
$c = "halo";
$d = true;
$e = NULL;

$a = (unset) $a;
$b = (unset) $b;
$c = (unset) $c;
$d = (unset) $d;
$e = (unset) $e;
?> 
</pre>

<p>Perhatikan bahwa saat mengubah Boolean menjadi string akan menghasilkan nilai "1", dan saat mengubah NULL menjadi string akan menjadi string kosong "".</p>

</body>
</html>
