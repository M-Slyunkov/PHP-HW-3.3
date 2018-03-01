<?php
namespace vehicle;

class Car extends LandVehicle implements Drivable {
    protected $color = 'white';
    protected $wheelCount = 4;
    private $seats = 5;

    public function getSeats()
    {
        return $this->seats;
    }
    public function startEngine()
    {
        echo 'Двигатель запущен';
    }

    public function stopEngine()
    {
        echo 'Двигатель заглушен';
    }

    public function drive()
    {
        echo 'Поехали';
    }

    public function brake()
    {
        echo 'Стоп';
    }
    public function __construct($name, $price) {
        parent::__construct($name, $price);
    }
}