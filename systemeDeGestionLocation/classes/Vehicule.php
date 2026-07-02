<?php



class Vehicule
{
    private string $nom;
    private float $prix;
    private Statut $statutVehicule;

    public function __construct(string $nom,float $prix) {
        $this->nom = $nom;
        $this->prix = $prix;
        if ($prix >= 100) {
            
        }
        elseif($prix >= 20 && $prix < 100){

        }else{
            
        }
    }
}