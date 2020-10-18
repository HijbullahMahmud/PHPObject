<!DOCTYPE htlm>
<html>
<body>
<?php

//define a case-sensitive constant variable
define("HELLO", "Hello World!");
echo HELLO;
echo "<br>";

//define a case-insensitive constant variable
define("HELLO", "Hello World!", true);
echo HELLO;
echo "<br>";

//constant array
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];


?>
</html>
</body>