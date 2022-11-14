<?php

class Ecole{
     //les attributs
     private $nom;
     private $adresse;
     private $tel;

     public function __construct($nom, $adresse, $tel) //constructeur avec paramètres
     {
         $this->nom= $nom;
         $this->adresse= $adresse;
         $this->tel= $tel;
     }
        
     
     //les methodes
     //getters
     public function getNom(){
        return $this->nom;
     }
     public function getAdresse(){
        return $this->adresse;
     }
     public function getTel(){
        return $this->tel;
     }
     
     //setters
     public function setNom($nom){
        $this->nom = $nom;
     }
     public function setAdresse($adresse){
        $this->adresse = $adresse;
     }

     public function setTel($tel){
        $this->tel = $tel;
     }

     public function getInfoEcole(){
        return "Nom : ".$this->nom ." Adresse : ".$this->adresse ." Tel : ".$this->tel;
     }
}
$e1 = new Ecole("ENSI", "Manouba","+33400545");
$e2 = new Ecole("INSAT", "Tunis","+334046540");
$e3 = new Ecole("ESPRIT", "Ghazala","+3346465000");

$tab = array($e1,$e2,$e3);
// var_dump($tab);
foreach ($tab as $e)
{
    echo $e->getInfoEcole()."<br/>";
}

// $e2 = new Etudiant();
// $e2->setNom("toto");
// $e2->setAge("28");

// echo $e1->getInfoEcole()."<br/>";
// echo "<br/>";
// echo $e2->infoEtudiant();

?>