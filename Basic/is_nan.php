<!DOCTYPE html>
<html>
<body>

<h2>The PHP is_nan() Function</h2>

<?php
// An invalid calculation return a NaN value
$x = acos(8);
var_dump($x);

echo "<br>";

// Check if value is not a number (NaN)
var_dump(is_nan($x));
?>  

</body>
</html>
