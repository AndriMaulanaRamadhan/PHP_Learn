<!DOCTYPE html>
<html>
<body>

<?php  
for ($x = 0; $x <= 10; $x++) {
  if ($x == 3) break;
  echo "The number is: $x <br>";
}

for ($y = 0; $y <= 10; $y++) {
  if ($y == 3) continue;
  echo "The number is: $y <br>";
}
?>  

</body>
</html>
