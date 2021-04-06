<?php

$hour = $_POST['hour'];
$vehicle = $_POST['vehicle'];

$totalcar = $hour*3;
$totalmotor = $hour*1.5;

if ($vehicle = "car" && $totalcar <= 12){
echo "Total Amount : " . $totalcar;
} 
elseif ($vehicle = "motor" && $totalmotor <= 6){
echo "Total Amount : " . $totalmotor;}
else{
echo "Exceed maximum fee. Please pay RM50";
}

  ?>
