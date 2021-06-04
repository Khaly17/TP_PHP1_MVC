<?php
class Etudiant{
    
    //Declaration des variables
    private $matricule;
    private $nom;
    private $prenom;
    private $etatInscription;

    //Constructeur
    public function __construct($matricule, $nom, $prenom, $etatInscription=0){
        $this->matricule = $matricule;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->etatInscription = $etatInscription;
    }

    //Getters
    public function getMatricule(){
        return $this->matricule;
    }
    public function getNom(){
        return $this->nom;
    }
    public function getPrenom(){
        return $this->prenom;
    }
    public function getEtatInscription(){
        return $this->etatInscription;
    }

    //Setters

    public function setMatricule($matricule){
        $this->matricule = $matricule;
    }
    public function setNom($nom){
        $this->nom = $nom;
    }
    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }
    public function set($etatInscription){
        $this->etatInscription = $etatInscription;
    }
}
