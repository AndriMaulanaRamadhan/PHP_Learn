<!DOCTYPE html>
<html>
<body>

<h2>The PHP is_numeric() Function</h2>

<p>Check if variable is a number or a numeric string:</p>

<?php
$x = 5985;
var_dump(is_numeric($x));

echo "<br>";

$x = "5985";
var_dump(is_numeric($x));

echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));

echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));
?>  

</body>
</html>
