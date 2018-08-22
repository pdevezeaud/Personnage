<?php
// Page 20                                                                                                     
class Personnage 
{
    private $force;
    private $localisation;
    public $experience;
    private $degats;

    // Déclarations des constantes en rapport avec la force.
    const FORCE_PETITE = 20;
    const FORCE_MOYENNE = 50;
    const FORCE_GRANDE = 80;



    public function __construct($forceInitial) //constructeur initialisé avec deux parametres
    {
       // N'oubliez pas qu'il faut assigner la valeur d'un attribut uniquement depuis son setter !
        $this->setForce($forceInitial);
    }

    

    public function afficherExperience()
    {
        echo $this->experience;
        
    }


    /**
     * On prend l'experience auquel on ajoute +1
     */
    public function gagnerExperience()
    {
     $this->experience = $this->experience + 1;
        
    }

    /**
     * on ajoute personnage pour etre sur que la valeur et de type personnage
     */

   public function frapper(Personnage $persoAFrapper){
       $persoAFrapper->degats += $this->force; 
    }


    //**********   Getter *************************** */
    
    
    /**
     * Get the value of force
     */ 
    public function getForce()
    {
        return $this->force;
    }

    /**
     * Get the value of experience
     */ 
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Get the value of degats
     */ 
    public function getDegats()
    {
        return $this->degats;
    }

    
    //***********  SETTER *************************** */
    
    /**
     * Set the value of force
     *
     * @return  self
     */ 
    public function setForce($force)
    {
        //on verifie bien qu'on noud donne bien soit une PETITE_FORCE soit une MOYENNE_FORCE
        if(in_array($force, array(self::FORCE_PETITE, self::FORCE_MOYENNE, self::FORCE_GRANDE)))
        {
            $this->force = $force;
        } 
    }


    /**
     * Set the value of experience
     *
     * @return  self
     */ 
    public function setExperience($experience)
    {
        if(!is_int($experience)) // si il ne s'agi pas d'un entier
        {
            trigger_error('L\expérience d\'un personnage doit etre un nombre entier', E_USER_WARNING);
            return;
        }

        if($experience > 100)
        {
            trigger_error('L\expérience d\'un personnage doit etre superieur à 100', E_USER_WARNING);
            return;
        }
        
        $this->experience = $experience;   
    }


    // Methode static
    public static function parler()
    {
        echo "Je t'ai tuer !! ";
    }


    /**
     * Set the value of degats
     *
     * @return  self
     */ 
    public function setDegats($degats)
    {
        $this->degats = $degats;

        return $this;
    }
}

?>