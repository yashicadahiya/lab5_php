<?php
require_once 'Vehicle.php';

$a = new Vehicle('Mercedes Sports',' White ',Vehicle::DIESEL);
$b = new Vehicle('Mercedes Benz',' Black ',Vehicle::PETROL);

$display = $a->displayVehicle();
echo $display ;
echo "<br>";
echo Vehicle::getCount();
