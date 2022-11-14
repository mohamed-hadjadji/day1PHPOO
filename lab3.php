

<?php

class Etudiant
{
    // les attributs d'instance
    public $nom;
    public $age;

    private static $nbMax=20;  //attribut de la classe et non d'instance
    public static $nbEtudiant;

    public function __construct()  // à chaque création d'une instance, on incrémente l'attribut static de la classe
    {
        self::$nbEtudiant++;
    }

    //les méthodes
    //les getters
    public function getNom()
    {
        return $this->nom;
    }

    public function getAge()
    {
        return $this->age;
    }
     // les setters
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setAge($age)
    {
        if ($age>18) {
            $this->age = $age;
        } else {
            echo "Valeur de l age invalide!";
        }
    }

    public function infoEtudiant() // méthode d'instance
    {
        return "Nom : ".$this->nom ." Age : ".$this->age;
    }

    public static function getNbMax()  //méthode de classe
    {
       return self::$nbMax;
    }
}


$e1 = new Etudiant();  // creation d'un premier objet $e1

$e1->setNom("Amine");
$e1->setAge(-20);

echo "<br/>Nbre actuel etudiants : ".Etudiant::$nbEtudiant;  //appel de l'atribut static
$e2 = new Etudiant(); // creation d'un deuxième objet $e2

$e2->setNom("Alain");
$e2->setAge(22);

echo $e1->infoEtudiant();

echo "<br/>Nbre actuel etudiants : ".Etudiant::$nbEtudiant;


echo "<br/>Nbre max etudiants : ".Etudiant::getNbMax();
/*
echo"<br/>";
echo $e2->infoEtudiant();*/
