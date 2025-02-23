<?php

class Sailboat {
    private $boatName;
    private $ownerName;
    private $numberOfSails;
    private $price;

    public function __construct() {} //Default constructor w/ no arguments

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
        return "Boat Name: " . $this->boatName . ", Owner Name: " . $this->ownerName . ", Number of Sails: " . $this->numberOfSails . ", Price: $" . $this->getFormattedPrice();
    }

    public function toJsonString() {
        //Function that will take the state of the object and return a json encoded string
        return json_encode([
            'sailboatString' =>$this->toString(), // string with all sailboat details
            'boatName' => $this->boatName,
            'ownerName' => $this->ownerName,
            'numberOfSails' => $this->numberOfSails,
            'price' => $this->price,
        ]);
    }
}
