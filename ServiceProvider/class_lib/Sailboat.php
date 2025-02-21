<?php

class Sailboat {
    private $boatName;
    private $ownerName;
    private $numberOfSails;
    private $price;

    public function __construct($boatName = "", $ownerName = "", $numberOfSails = 0, $price = 0) {
        $this->boatName = $boatName;
        $this->ownerName = $ownerName;
        $this->numberOfSails = $numberOfSails;
        $this->price = $price;
    }

    public function getBoatName() {
        return $this->boatName;
    }

    public function getOwnerName() {
        return $this->ownerName;
    }

    public function getNumberOfSails() {
        return $this->numberOfSails;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setBoatName($boatName) {
        $this->boatName = $boatName;
    }

    public function setOwnerName($ownerName) {
        $this->ownerName = $ownerName;
    }

    public function setNumberOfSails($numberOfSails) {
        $this->numberOfSails = $numberOfSails;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getFormattedPrice(){
        return number_format($this->price, 2);
    }

    public function toString() {
        return "Boat Name: " . $this->boatName . " Owner Name: " . $this->ownerName . " Number of Sails: " . $this->numberOfSails . " Price: $" . $this->getFormattedPrice();
    }
}
