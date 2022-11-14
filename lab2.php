<?php

class Etudiant{
     //les attributs
     public $nom;
     public $age;

     //les methodes
     //getters
     public function getNom(){
        return $this->nom;
     }
     public function getAge(){
        return $this->age;
     }
     
     //setters
     public function setNom($nom){
        $this->nom = $nom;
     }
     public function setAge($age){
        $this->age = $age;
     }

     public function infoEtudiant(){
        return "Nom : ".$this->nom ." Age : ".$this->age;

     }
}
$e1 = new Etudiant();
$e1->setNom("momo");
$e1->setAge("39");

$e2 = new Etudiant();
$e2->setNom("toto");
$e2->setAge("28");

echo $e1->infoEtudiant();
echo "<br/>";
echo $e2->infoEtudiant();

?>