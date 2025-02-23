<?php
/* SailboatAPI class to exposes 2 methods, 
    * 1 to create the DB object w/ 0 arguments
    * 1 to take a string and search the DB for a sailtboat name that matches, a
*/
class SailboatAPI {
    private static  function createDBObject() {
        //create DB object w/ no arguments
        $db = new SailboatDB();
        return $db;
    }

    public static function getBoatFromDB ($boatName) {
        $db = self::createDBObject();                 // Create a new SailboatDB object
        $targetBoat = $db->getSailboat($boatName); // Call getSailboat() method to "look up" sailboat in DB emulator
        return $targetBoat->toJsonString(); //return string from get sailboat
    }
}
header("Content-Type: application/json");
require_once 'class_lib/SailboatDB.php';

$sailboatName = $_REQUEST['boatName'] ?? ''; // Read the variable named 'boatName' received from client

$boatJson = SailboatAPI::getBoatFromDB($sailboatName);   //get boat & turn to json string
echo $boatJson;


?>