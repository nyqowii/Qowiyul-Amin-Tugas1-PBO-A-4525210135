<?php

require_once 'Vehicle.php';

class Building extends Vehicle {
    public function __construct(string $name) {
        parent::__construct($name);
    }

    // Building tidak mengimplementasikan Movable atau Fuelable
}