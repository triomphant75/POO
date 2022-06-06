<?php
namespace App\Models;
use  App\Core\Model;
class Module extends Model{
    private int $id;
    private string $libelle;
    //constructeur 
    public function __contruct(){
        self::$table="module";
    }


    //les fonctions navigationnelless 
    // one to many avec cours 
    public function cours():array{
        $sql=" select * from cours c,
        module m where c.classe_id=m.id and m.id={$this->id} ";
        return [];
    }
    //Many to many avec Professeurs
    public function professeurs():array{
        $sql=" select * from cours c,
        professeur p where c.classe_id=p.id and p.id={$this->id} ";
        return [];
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
}