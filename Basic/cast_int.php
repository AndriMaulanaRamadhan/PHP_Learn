<!DOCTYPE html>
<html>
<body>

<h2>Cast to Integer</h2>

<pre>
<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 km"; // String
$d = "km 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

// Use var_dump() to verify the data type
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($g);
?> 
</pre>

<p>When casting a string that starts with a number, (int) gets that number.</p>
<p>If the string does not start with a number, (int) convert strings to 0.</p>

</body>
</html>
