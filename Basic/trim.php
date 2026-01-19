<!DOCTYPE html>
<html>
<body>

<h2>The trim() Function</h2>

<?php
$x = "     Hello World! ";
echo trim($x);
?> 

<p>The whitespaces are invisible in plain HTML,<br>
but check out the difference in two input fields:</p>

<?php
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
?> 


</body>
</html>
