<!DOCTYPE html>
<html>
<body>

<?php
//if the current time (HOUR) is less than 20:
$t = date("H");

if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
?>
 
</body>
</html>
