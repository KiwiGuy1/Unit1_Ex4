<?php
include('Sailboat.php');

class SailboatDB
{
    public function getSailboat($boatName)
    {
        // create the Sailboat object
        $sailboat = new Sailboat();
        
        // fill the Sailboat object with data based on boatName received
        $sailboat->setBoatName($boatName);
        
        if ($boatName == "Sea Breeze")
        {
            $sailboat->setOwnerName("John Doe");
            $sailboat->setNumberOfSails(3);
            $sailboat->setPrice(150000);
        }
        else if ($boatName == "Ocean Wave")
        {
            $sailboat->setOwnerName("Jane Smith");
            $sailboat->setNumberOfSails(2);
            $sailboat->setPrice(120000);
        }
        else if ($boatName == "Wind Rider")
        {
            $sailboat->setOwnerName("Bob Johnson");
            $sailboat->setNumberOfSails(4);
            $sailboat->setPrice(200000);
        }
        else
        {
            $sailboat->setOwnerName("Unknown Owner");
            $sailboat->setNumberOfSails(0);
            $sailboat->setPrice(0);
        }
        
        return $sailboat;
    }
}