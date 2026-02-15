<?php
//semua type casting
$var1 = 12; // Tipe data integer
$var2 = (float) $var1; // Casting ke tipe data float
$var3 = (string) $var1; // Casting ke tipe data string
$var4 = (bool) $var1; // Casting ke tipe data boolean
var_dump($var1);
echo "<br>";
var_dump($var2);
echo "<br>";
var_dump($var3);
echo "<br>";
var_dump($var4);

$var5 = "3.14"; // Tipe data string
$var6 = (int) $var5; // Casting ke tipe data integer
$var7 = (float) $var5; // Casting ke tipe data float
var_dump($var5);
echo "<br>";
var_dump($var6);
echo "<br>";
var_dump($var7);

$var8 = 0; // Tipe data integer dengan nilai 0
$var9 = (bool) $var8; // Casting ke tipe data boolean
var_dump($var8);
echo "<br>";
var_dump($var9);

$var10 = null; // Tipe data null
$var11 = (int) $var10; // Casting ke tipe data integer
$var12 = (bool) $var10; // Casting ke tipe data boolean
var_dump($var10);
echo "<br>";
var_dump($var11);
echo "<br>";
var_dump($var12);

$var13 = "Hello"; // Tipe data string
$var14 = (int) $var13; // Casting ke tipe data integer
$var15 = (bool) $var13; // Casting ke tipe data boolean
var_dump($var13);
echo "<br>";
var_dump($var14);
echo "<br>";
var_dump($var15);
?>