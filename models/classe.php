<?php
namespace App\Models;
use  App\Core\Model;
class Classe extends Model {
    //Attributs instances 
    private int $id;
    private string $libelle;
    private string $filiere;
    private string $niveau;


    //fonctions  navigationnelles (fonction issues des associations )
    //1-Attributs
    //one to many avec cours donne un array 
    // 2-par des methodes 
    public function cours():array{
        $sql=" select * from cours c,
        classe cl where c.classe_id=cl.id and cl.id={$this->id} ";
        return [];
    }
    //one to many avec Inscription donne un array  Ps: tous ce qui est tableau il y'a s a la fin  
    public function inscriptions():array{
        $sql=" select * from inscriptions i,
        classe cl where i.classe_id=cl.id and cl.id={$this->id} ";

        return [];
    }



    //Methodes 
        //constructeurs
    public function __construct(){ 
        //On appelle le constructeur qui permet d'instancier les objects 
    
        self::$table="classe";
    }
  

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of filiere
     */ 
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set the value of filiere
     *
     * @return  self
     */ 
    public function setFiliere($filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get the value of niveau
     */ 
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * Set the value of niveau
     *
     * @return  self
     */ 
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;

        return $this;
    }
}