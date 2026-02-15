<?php
//semua macam type data null
$var1 = null; // Tipe data null dengan nilai null
var_dump($var1);
echo "<br>";

$var2; // Variabel yang belum diinisialisasi, secara default memiliki nilai null
var_dump($var2);
echo "<br>";

$var3 = 100;
unset($var3); // Menghapus variabel $var3, sehingga nilainya menjadi null
var_dump($var3);
?>