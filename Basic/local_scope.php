<!DOCTYPE html>
<html>
<body>

<h2>Local Scope</h2>

<?php
function myTest() {
  $x = 5; // local scope
  echo "Variable x inside function is: $x<br>";
} 
myTest();

// using x outside the function will not work
echo "Variable x outside function is: $x";
?>

</body>
</html>
