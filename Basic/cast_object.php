<!DOCTYPE html>
<html>
<body>

<h2>Cast to Object</h2>

<pre>
<?php
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;

// Use var_dump() to verify the data type
var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);
?> 
</pre>

<p>When casting to object, most data types converts into an object with one property, named "scalar", with the corresponding value.</p>

<p>NULL values converts to an empty object.</p>

</body>
</html>
