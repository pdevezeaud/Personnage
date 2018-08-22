<?php
// Page 20                                                                                                     
class Personnage 
{
    private $force=20;
    private $localisation="Mordor";
    public $experience= 0;
    private $degats = 0;

    public function __construct($force,$degats) //constructeur initialisé avec deux parametres
    {
        echo "Voici le constructeur !!";
        $this->setForce($force);    //initialisation de la force
        $this->setDegats($degats);  //initialisation des dégats
        $this->experience = 1;     //experience mis à 1
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
        if(!is_int($force))
        {
            trigger_error('La force d\'un personnage doit être un nombre entier', E_USER_WARNING);
            return;
        }
        if($force > 100) // on vérifie que la valeur de force ne soit pas superieur à 100
        {
            trigger_error('La force d\'un personnage ne peut dépasser 100');
            return;
        }
        
        $this->force = $force;     
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