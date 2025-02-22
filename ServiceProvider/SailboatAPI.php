<?php

class SailboatAPI {
    public static  function createDBObject() {
        $db = new SailboatDB();
        return $db;
    }

    public static function getBoatFromDB ($boatName) {
        $db = self::createDBObject();                 // Create a new SailboatDB object
        $targetBoat = $db->getSailboat($boatName); // Call getSailboat() method to "look up" sailboat in DB emulator
        return $targetBoat->toJsonString();
    }


    
}
header("Content-Type: application/json");
require_once 'class_lib/SailboatDB.php';

$sailboatName = $_REQUEST['boatName'] ?? ''; // Read the variable named 'boatName' received from client

$boatJson = SailboatAPI::getBoatFromDB($sailboatName);   //get boat & turn to json string
echo $boatJson;


?>