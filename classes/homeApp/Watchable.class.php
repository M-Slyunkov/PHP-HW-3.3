<?php
namespace homeApp;

interface Watchable {
    public function turnOn();
    public function turnOff();
    public function watch();
}