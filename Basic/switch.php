<!DOCTYPE html>
<html>
<body>

<?php
$d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The week feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are best!";
    break;
  default:
    echo "Something went wrong";
}
?>
 
</body>
</html>
