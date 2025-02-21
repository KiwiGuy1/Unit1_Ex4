<?php
header("Content-Type: application/json");
require_once 'SailboatDB.php';

$sailboatName = $_REQUEST['boatName'] ?? ''; // Read the variable named 'boatName' received from client

$sailboatDB = new SailboatDB(); // Create a new SailboatDB object
$rSailboat = $sailboatDB->getSailboat($sailboatName); // Call getSailboat() method to "look up" sailboat in DB emulator

$data = array(); // Create an array to store sailboat details
$data['sailboatString'] = $rSailboat->toString(); //returns string with all sailboat details
$data['boatName'] = $rSailboat->getBoatName();
$data['ownerName'] = $rSailboat->getOwnerName();
$data['nummberOfSails'] = $rSailboat->getNumberOfSails();
$data['price'] = $rSailboat->getPrice();

print(json_encode($data));
?>