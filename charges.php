<?php

$hour = $_POST['hour'];
$vehicle = $_POST['vehicle'];

$totalcar = $hour*3;
$totalmotor = $hour*2;

if ($vehicle = "car" && $totalcar <= 12){
echo "Please Pay Total Amount of Parking Fee: RM " . $totalcar;
} 
elseif ($vehicle = "motor" && $totalmotor <= 6){
echo "Please Pay Total Amount of Parking Fee: RM " . $totalmotor;}
else{
echo "Exceed maximum fee. Please pay RM 50";
}

$level1car = [
    ['vehicle' => 'car', 'level' => 1],
    ['vehicle' => 'car', 'level' => 1],
    ['vehicle' => 'car', 'level' => 1],
    ['vehicle' => 'car', 'level' => 1],
    ['vehicle' => 'car', 'level' => 1],
    ['vehicle' => 'car', 'level' => 1]
    ];
 
$level1motor = [
      ['vehicle' => 'motorcycle', 'level' => 1],
      ['vehicle' => 'motorcycle', 'level' => 1],
      ['vehicle' => 'motorcycle', 'level' => 1],
      ['vehicle' => 'motorcycle', 'level' => 1],
      ['vehicle' => 'motorcycle', 'level' => 1]
      ];
$level2 = [
 ['vehicle' => 'car', 'level' => 2],
 ['vehicle' => 'car', 'level' => 2],
 ['vehicle' => 'car', 'level' => 2],
 ['vehicle' => 'car', 'level' => 2],
 ['vehicle' => 'car', 'level' => 2],
 ['vehicle' => 'car', 'level' => 2],
 ['vehicle' => 'car', 'level' => 2],
 ['vehicle' => 'car', 'level' => 2],
 ['vehicle' => 'car', 'level' => 2]
 ];

$totalvehicle = count($level1car)+count($level1motor)+count($level2);

echo "<br>"."<br>"."Total Vehicle in Level 1 (Car) : " . count($level1car) ." / 15". "<br>" . "<br>" . "Total Vehicle in Level 1 (Motorcycle) : " . count($level1motor) ." / 15". "<br>" . "<br>" .
"Total Vehicle in Level 2 : " . count($level2) ." / 30". "<br>" . "<br>" ."Sum of Vehicle : " . $totalvehicle ." / 60";

  ?>