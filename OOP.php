<?php

class Car {

    protected $brand;
    protected $model;
    protected $year;

    public function __construct($b, $m, $y, $mileage = 0) {
        $this->brand = $b;
        $this->model = $m;
        $this->year = $y;
        $this->mileage = $mileage;
    }
    
    public function driver () {
        echo "$this->brand $this->model ($this->year, $this->mileage) driving<br>";
    }

    public function addMileage ($mileage) {
        $error = false;
        if ($mileage > 0) {
            $this->mileage += $mileage;
            

        } else {
            $error = true;
        }
        return [
            'error' => $error,
            'mileage' => $this->mileage
        ];
    }
        

}

$audi = new Car('Audi', 'Q5', 2021);
$vesta = new Car('Lada', 'Vesta', 2020, 15000);

$audi->driver();
$vesta->driver();

$currentAudiMileage = $audi->addMileage(2000);


$audi->driver();
$vesta->driver();

