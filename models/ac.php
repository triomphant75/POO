<?php
namespace App\Models;
class Ac extends User{
    //Attributs
    private string $email;

    //Methodes 
        //constructeurs
    public function __construct(){ 
        //On appelle le constructeur qui permet d'instancier les objects 
        $this->role="ROLE_AC";
        //1-Redifiniton => evolution
        //2-Redefenir c'est changer son comportement 
    }




    
    //setters ou mutateurs  (on encapsule)
    public function setEmail(string $email): void{
        $this->email=$email;     
    }
    //getters (permet de d'obtenir la valeur d'un attribut priver ou public )
    public function getEmail(): string{
        return $this->email;
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