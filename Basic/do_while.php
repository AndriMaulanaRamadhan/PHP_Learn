<!DOCTYPE html>
<html>
<body>

<?php  
$i = 1;

do {
  if ($i == 3) break;
  echo $i;
  $i++;
} while ($i < 6);

$j = 0;

do {
  $j++;
  if ($j == 3) continue;
  echo $j;
} while ($j < 6);
?>  

</body>
</html>
