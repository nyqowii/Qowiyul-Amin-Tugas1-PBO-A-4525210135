<?php

require_once 'Vehicle.php';
require_once 'Movable.php';
require_once 'Fuelable.php';

class Motor extends Vehicle implements Movable, Fuelable {
    public function __construct(string $name) {
        parent::__construct($name);
    }

    public function move(): void {
        echo $this->name . " bergerak di tanah gravel." . PHP_EOL;
    }

    // Menggunakan implementasi standar/default refuel
    public function refuel(): void {
        echo "Mengisi bahan bakar umum." . PHP_EOL;
    }
}