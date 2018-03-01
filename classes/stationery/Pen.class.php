<?php
namespace stationery;

class Pen extends WritingUtensil implements Writable {
    public function refill($newColor) {
        $this->color = $newColor;
        $this->capacity = 10;
    }
    public function write() {
        if ($this->capacity === 0) {
            echo 'You\'re out of ink, please refill pen';
            exit;
        }
        $this->capacity--;
    }
    public function __construct($name, $price) {
        parent::__construct($name, $price);
    }
}