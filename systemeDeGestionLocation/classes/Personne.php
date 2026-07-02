<?php


abstract class Personne{


    protected int $id;
    protected string $nom;

    protected string $email;

    public static int $compteur = 1;
    public function __construct(string $nom,string $email)
    {
        $this->id = self::$compteur++ ;
        $this->nom = $nom;
        $this->email = $email;

    }


    public function getId(){
        return $this->id;
    }
    public function getNom(){
        return $this->nom;
    }
    public function setNom($nom){
        $this->id = $nom;
    }
        public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
}