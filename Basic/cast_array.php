<!DOCTYPE html>
<html>
<body>

<h2>Cast to Array</h2>

<pre>
<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

// Use var_dump() to verify the data type
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>

<p>When casting to array, most data types converts into an indexed array with one element.</p>
<p>NULL values converts into an empty array object.</p>

</body>
</html>
