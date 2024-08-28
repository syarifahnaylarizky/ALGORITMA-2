<?php
$foo = "1";  // mula-mual $foo dalam bentuk string (ASCII 49)
$foo *= 2;   // $foo sekarang adalah integer (2)
$foo = $foo * 1.3;  // $foo sekarang adalah float (2.6)
$foo = 5 * "10 Little birds"; // $foo sekarang adalah integer (50)
$foo = 5 * "10 Small birds"; // $foo sekarang adalah integer (50)
?>
Selain cara ini, kita juga bisa melakukannya seperti di bahasa C:
<?php

$a = "32";
$a = (int) $a; // ubah nilai a menjadi integer
$a = (float) $a; // ubah nilai a menjadi float
$a = (string) $a; // ubah nilai a menjadi string

?>
