<?php
namespace App\Models;
class Professeur  extends User{
    //Attribut instances 
    private string $grade;


     //Methodes 
        //constructeurs
        public function __construct(){ 
            //On appelle le constructeur qui permet d'instancier les objects 
            $this->role="ROLE_PROFESSEUR";
            //1-Redifiniton => evolution
            //2-Redefenir c'est changer son comportement 
        }

        //one to many avec Cours donne un array  Ps: tous ce qui est tableau il y'a s a la fin  
    public function cours():array{
        $sql=" select * from cours c,
        professeur p where c.professeur_id=p.id and p.id={$this->id} ";
        return [];
    }

     //Many to many avec Modules
     public function modules():array{
        $sql=" select u* from professeur p ,
        module m where p.professeur_id=m.id and m.id={$this->id} ";
        return [];
    }
    //one to one avec adresse 
    public function adresse():Adresse|null{
        return null;
    }



    //Getters

    

    /**
     * Get the value of grade
     */ 
    public function getGrade()
    {
        return $this->grade;
    }


    //Setters 
    

    /**
     * Set the value of grade
     *
     * @return  self
     */ 
    public function setGrade($grade)
    {
        $this->grade = $grade;

        return $this;
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
