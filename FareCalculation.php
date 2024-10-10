<?php

class Vehicle {
    protected $seating_capacity;

 
    public function __construct($seating_capacity = 0) {
        $this->seating_capacity = $seating_capacity;
    }

   
    public function fare() {
        return $this->seating_capacity * 100;
    }
}

class Bus extends Vehicle {
    public function __construct($seating_capacity = 50) {
        parent::__construct($seating_capacity);
    }


    public function fare() {
        $basic_fare = parent::fare();
        return $basic_fare + (0.10 * $basic_fare); // Adding 10% 
    }
}


$bus = new Bus();
echo "Total Fare for Bus: " . $bus->fare() ; 
?>
