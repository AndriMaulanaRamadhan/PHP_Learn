<!DOCTYPE html>
<html>
<body>

<?php  
$i = 1;

while ($i < 6) {
  if ($i == 3) break;  
  echo $i;
  $i++;
} 

$j = 0;

while ($j < 6) {
  $j++;
  if ($j == 3) continue;  
  echo $j;
} 
?>  

</body>
</html>
