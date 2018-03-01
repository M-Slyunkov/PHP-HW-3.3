<?php
namespace homeApp;

abstract class HomeAppliance extends \Product {
    public function turnOn()
    {
        echo 'Прибор включен';
    }

    public function turnOff()
    {
        echo 'Прибор выключен';
    }
}