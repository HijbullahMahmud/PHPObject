<!DOCTYPE html>
<html>

<body>

<?php

class Cal{
  public $first_number;
  public $second_number;

  public function __construct($first_number, $second_number){
   $this->first_number = $first_number;
   $this->second_number = $second_number;
  }

  public function mySum() {
    $total = $this->first_number + $this->second_number;
     return "Sum of  $this->first_number and $this->second_number is $total. ";
  }
}

$sum1 = new Cal(12, 10);
echo $sum1->mySum();
echo "<br>";
$sum2 = new Cal(10, 1500);
echo $sum2->mySum();

?>

</body>
</html>