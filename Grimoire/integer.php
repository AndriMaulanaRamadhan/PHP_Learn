<?php
$umur = 25; // Variabel integer
$harga = 15000;
$keuntungan = -50000;

var_dump($umur);
echo "<br>";
var_dump($harga);
echo "<br>";
var_dump($keuntungan);
echo "<br>";

print PHP_INT_MAX; // Menampilkan nilai maksimum integer
$var = 99999999999999999999999; // Nilai melebihi batas integer
var_dump($var); // Akan menjadi float karena melebihi batas integer
echo "<br>";

$angka_desimal = 41284;
$angka_hexadecimal = 0x1A; // Hexadecimal untuk 26
$angka_octal = 0123; // Octal untuk 83
$angka_biner = 0b1010; // Biner untuk 10
$numeric_literal = 1_000_000; // Numeric literal dengan underscore untuk memudahkan pembacaan

var_dump($angka_desimal);
echo "<br>";
var_dump($angka_hexadecimal);
echo "<br>";
var_dump($angka_octal);
echo "<br>";
var_dump($angka_biner);
echo "<br>";
var_dump($numeric_literal);
?>