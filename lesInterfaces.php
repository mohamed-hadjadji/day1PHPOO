<?php

// première interface

interface Vehicule{

    public function info();   // méthode abstraite
    public function NbreDeRoues();  // méthode abstraite
}


interface X{
    public function getX();  // méthode abstraite
}



class Moto implements Vehicule, X{
    public function info(){  // méthode concrete
        echo "Un Moto";
    }
    public function NbreDeRoues(){  // méthode concrete
        echo "2 Roues";
    } 

    public function getX(){
        echo "Position GPS";
    }
}

class Voiture implements Vehicule{
    public function info(){
        echo "Une voiture";
    }
    public function NbreDeRoues(){
        echo "4 Roues";
    } 
}

?>