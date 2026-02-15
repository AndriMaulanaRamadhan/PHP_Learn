<?php
$var1 = 12;
echo gettype($var1) . "<br>"; // Output: integer
$var2 = 3.14;
echo gettype($var2) . "<br>"; // Output: double
$var3 = "Hello, World!";
echo gettype($var3) . "<br>"; // Output: string
$var4 = true;
echo gettype($var4) . "<br>"; // Output: boolean
$var5 = null;
echo gettype($var5) . "<br>"; // Output: NULL
$var6 = array(1, 2, 3);
echo gettype($var6) . "<br>"; // Output: array
$var7 = new stdClass();
echo gettype($var7) . "<br>"; // Output: object
$var8 = fopen("file.txt", "r");
echo gettype($var8) . "<br>"; // Output: resource
?>