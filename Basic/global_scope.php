<!DOCTYPE html>
<html>
<body>

<h2>Global Scope</h2>

<?php
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will not work
  echo "Variable x inside function is: $x<br>";
} 
myTest();

echo "Variable x outside function is: $x";
?>

</body>
</html>
