<?php
//RP hérite de User
class Rp extends User{
    //Attributs

    

    //Methodes 
        //constructeurs
    public function __construct(){ 
        //On appelle le constructeur qui permet d'instancier les objects 
        $this->role="ROLE_RP";
        //1-Redifiniton => evolution
        //2-Redefenir c'est changer son comportement 
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
    
}