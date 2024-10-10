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

class Bus extends Vehicle {
    public $seating_capacity;

    public function __construct($name, $speed, $mileage, $seating_capacity = 50) {
        parent::__construct($name, $speed, $mileage);
        $this->seating_capacity = $seating_capacity;
    }

    public function seating_capacity() {
        echo "Seating Capacity: " . $this->seating_capacity . "<br>";
    }
}


$bus = new Bus("City Bus", 90, 3000000);
$bus->displayInfo();
$bus->seating_capacity();
?>
