<?php
class Oiseau extends Animal{
  
    public function seDeplacer(){ echo "Je vol";}

}

class Poisson extends Animal{
    
    public function seDeplacer(){ echo "Je nage";}
}

 class Serpent extends Animal{
   
    public function seDeplacer(){ echo "Je rampe";}
}


abstract class  Animal{  //Animal concept abstrait
    protected $espece;
    protected $age;
    public function dormir(){ echo "Je dors";}
    public function manger(){ echo "Je mange";}
    public abstract function seDeplacer();
}


$animals =  array(new Oiseau(), new Poisson(), new Serpent());

foreach($animals as $animal)
{
    $animal->seDeplacer();
    echo"<br/>";
}
?>