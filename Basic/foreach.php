<!DOCTYPE html>
<html>
<body>

<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  if ($value == "blue") continue;
  echo "$value<br>";
}
?>

</body>
</html>
