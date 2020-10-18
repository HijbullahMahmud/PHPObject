<!DOCTYPE html>
<html>
<body>
<?php
// Cast float to int
$x = 120.214;
$int_cast = (int) $x;
echo $int_cast;
echo "<br>";

//cast string to int
$x = "123.454";
$int_cast = (int)$x;
echo $int_cast;
echo "<br>";

//check a variable is numeric or not 
$x = 548;
var_dump(is_numeric($x));
echo "<br>";

$x = "5985";
var_dump(is_numeric($x));
echo "<br>";

$x = "59.85" + 100;
var_dump(is_numeric($x));
echo "<br>";

$x = "Hello";
var_dump(is_numeric($x));


?>
</body>
</html>