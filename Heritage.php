<?php

class Personne
{
    protected $nom;
    protected $age;

    public function __toString()
    {
        return "Nom : ". $this->nom." Age : ".$this->age;
    }
    public function __construct($nom, $age)
    {
        $this->nom = $nom;
        $this->age = $age;
    }
}

class Etudiant extends Personne
{
    private $numInscription;

    public function __toString()
    {
       // return "Nom : ". $this->nom." Age : ".$this->age ." Num : ".$this->numInscription;
       return parent::__toString()." Num : ".$this->numInscription;
    }

   public function __construct($nom, $age, $num)
   {
       //$this->nom = $nom;  // KO
      // $this->age = $age;
       parent::__construct($nom, $age);
       $this->numInscription = $num;
   }
}

$e1 = new Etudiant("Amine",25,5);
echo $e1;