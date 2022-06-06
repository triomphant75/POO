<?php
namespace App\Models;
class Cours extends Model{
    private int $id;
    private \DateTime $dateCours;
    private string $heureDebut;
    private string $heureFin;

    //fonctions navigationnelles
    // many to one avec classe
    public function classe():Classe{
        $sql ="select * from cours c,
        classe cl where c.classe_id=cl.id and c.id={$this->id}";
        return new Classe();
    }

    // many to one avec module
    public function module():Module{
        $sql ="select * from cours c,
         module m where c.module_id=m.id and c.id={$this->id}";
        return new Module();
    }
    // many to one avec Professeur 
    public function professeur():Professeur{
        $sql ="select u.* from cours c,
         user u where c.professeur_id=u.id and c.id={$this->id}
         and role like 'ROLE_PROFESEEUR ";
        return new Professeur();
    }


    
    public function __construct(){
        self::$table="Cours";
    }


    

    /**
     * Get the value of date
     */ 
    public function getDate()
    {
        return $this->date;
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
     * Get the value of dateCours
     */ 
    public function getDateCours()
    {
        return $this->dateCours;
    }

    /**
     * Set the value of dateCours
     *
     * @return  self
     */ 
    public function setDateCours($dateCours)
    {
        $this->dateCours = $dateCours;

        return $this;
    }

    /**
     * Get the value of heureDebut
     */ 
    public function getHeureDebut()
    {
        return $this->heureDebut;
    }

    /**
     * Set the value of heureDebut
     *
     * @return  self
     */ 
    public function setHeureDebut($heureDebut)
    {
        $this->heureDebut = $heureDebut;

        return $this;
    }

    /**
     * Get the value of heureFin
     */ 
    public function getHeureFin()
    {
        return $this->heureFin;
    }

    /**
     * Set the value of heureFin
     *
     * @return  self
     */ 
    public function setHeureFin($heureFin)
    {
        $this->heureFin = $heureFin;

        return $this;
    }
}