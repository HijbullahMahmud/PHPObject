<!DOCTYPE html>

<html>
<body>

<?php 
//multidimentional array
$cars = array(
    array("Volvo", 22, 28), 
    array("Toyota", 11, 13), 
    array("Hundai", 423, 45), 
    array("BMW", 56, 5)
);

//echo $cars[0][0]. ": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";

//array with for loop
for ($i=0; $i < 4; $i++) { 
    echo "<p><b>Row number $i</b></p>";
    echo "<ul>";
    for ($col=0; $col < 3; $col++) { 
        echo "<li>".$cars[$i][$col]."</li>";
    }
    echo "</ul>";
}


?>

</body>
</html>
