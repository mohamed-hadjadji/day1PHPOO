<?php
   
   class Voiture
   {
    public $couleur;
    public $prix;
    public $marque;

    private static $vitesseMax = 400;
    private static $nbVoiture;

    public function __construct($marque, $prix, $couleur)
    {
        self::$nbVoiture++;
        $this->marque = $marque;
        $this->prix = $prix;
        $this->couleur = $couleur;

    }
    
    public static function vitesseMax()  //méthode de classe
    {
       return self::$vitesseMax;
    }
    public static function getVitesseMax(){
        return self::$vitesseMax;
       }

    public function __toString()
    {
        return "Marque: ".$this->marque." Prix: ".$this->prix." Couleur: ".$this->couleur;
    }


    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    /**
     * Get the value of prix
     */ 
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * Set the value of prix
     *
     * @return  self
     */ 
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get the value of marque
     */ 
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * Set the value of marque
     *
     * @return  self
     */ 
    public function setMarque($marque)
    {
        $this->marque = $marque;

        return $this;
    }
   }

   $v1 = new Voiture("BMW", 30000, "Black");
   $v2 = new Voiture("Marcedes", 40000, "White");
   $v3 = new Voiture("VW", 20000, "Grey");
   echo $v1; // appel implice de la méthode __toString()

   $mesVoitures = array($v1, $v2, $v3);
   ?>


   <h2 align='center'>Mes voitures : <?php echo Voiture::vitesseMax()?></h2>
   
   <h3 align='center'>Vitesse Max: <?php echo Voiture::getVitesseMax()?></h3>
   
   <table align="center" border="1">
   <tr><th>Marque</th><th>Prix</th><th>Couleur</th></tr>
   <?php
   foreach($mesVoitures as $voiture)
   {
       echo"<tr>";
       echo"<td>". $voiture->getMarque()."</td>";
       echo"<td>". $voiture->getPrix()."</td>";
       echo"<td>". $voiture->getCouleur()."</td>";
       echo"</tr>";
      
   }
   ?>
   </table>