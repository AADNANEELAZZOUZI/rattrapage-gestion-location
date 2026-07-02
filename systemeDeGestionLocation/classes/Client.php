<?php



class Client extends Personne
{
    private array $location = [];

    public function ajouterLocation(Location $location){
        $this->location [] = $location;
    }

    public function getLocation(){
        return $this->location;
    }

    public function afficherLocation($locations){
    
    foreach($this->location as $location){
        echo "Total :".$location->getTotal." vehicule : ".$location->getVehicule;
    }

    }
}