<?php

class Vehicle {
    public static $sharedProperty = "All vehicles have wheels.";
   
}

class Bus extends Vehicle {
}

class Car extends Vehicle {
}


echo Vehicle::$sharedProperty . "<br>";
echo Bus::$sharedProperty . "<br>";
echo Car::$sharedProperty . "<br>";
?>
