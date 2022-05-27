<?php
class Ac extends User{
    //Attributs
    private string $email;

    //Methodes 
        //constructeurs
    public function __construct(){ 
        //On appelle le constructeur qui permet d'instancier les objects 
    
    }



    
    //setters ou mutateurs  (on encapsule)
    public function setEmail(string $email): void{
        $this->email=$email;     
    }
    //getters (permet de d'obtenir la valeur d'un attribut priver ou public )
    public function getEmail(): string{
        return $this->email;
    }
}