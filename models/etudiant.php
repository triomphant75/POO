<?php
namespace App\Models;
class Etudiant extends User{
    //Attributs
    private string $nomComplet;
    private string $matricule;

    //one to many avec Inscription donne un array  Ps: tous ce qui est tableau il y'a s a la fin  
    public function inscriptions():array{
        $sql=" select u* from etudiant e,
        inscriptions i where e.etudiant_id=e.id and i.id={$this->id} ";
        return [];
    }
    //one to one avec Adresse donne un objet de type adresse
    public function adresse():Adresse{
        $sql=" select * from etudiant e,
        adresse a where e.classe_id=e.id and e.id={$this->id} ";
        return new Adresse;
    }

    //Methodes 
        //constructeurs
    public function __construct(){ 
        //On appelle le constructeur qui permet d'instancier les objects 
    
    }
    

    

    /**
     * Get the value of nomComplet
     */ 
    public function getNomComplet()
    {
        return $this->nomComplet;
    }

    /**
     * Set the value of nomComplet
     *
     * @return  self
     */ 
    public function setNomComplet($nomComplet)
    {
        $this->nomComplet = $nomComplet;

        return $this;
    }

    /**
     * Get the value of matricule
     */ 
    public function getMatricule()
    {
        return $this->matricule;
    }

    /**
     * Set the value of matricule
     *
     * @return  self
     */ 
    public function setMatricule($matricule)
    {
        $this->matricule = $matricule;

        return $this;
    }
}