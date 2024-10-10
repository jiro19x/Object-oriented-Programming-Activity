<?php
class Vehicle {
    public $name;
    public $speed;
    public $mileage;

    
    public function __construct($name, $speed, $mileage) {
        $this->name = $name;
        $this->speed = $speed;
        $this->mileage = $mileage;
    }

   
    public function displayInfo() {
        echo "Vehicle Name: " . $this->name . "<br>";
        echo "Speed: " . $this->speed . " km/h<br>";
        echo "Mileage: " . $this->mileage . " km<br>";
    }
}

// Testing the Vehicle class
$vehicle = new Vehicle("AEROX V2", 200, 15000);
$vehicle->displayInfo();
?>
