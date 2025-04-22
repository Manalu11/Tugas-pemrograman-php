<!DOCTYPE html>
<html>
<body>

<?php
class Buah {
  public function nilaiSaya(){
    return __CLASS__;
  }
}

$kiwi = new Buah();
echo $kiwi->nilaiSaya();
echo __DIR__;
echo __FILE__;

function nilaiSaya(){
  return __FUNCTION__;
}

echo nilaiSaya();
echo __LINE__;

class BuahLagi {
  public function nilaiSaya(){
    return __METHOD__;
  }
}

$kiwiBaru = new BuahLagi();
echo $kiwiBaru->nilaiSaya();
?>

</body>
</html>
