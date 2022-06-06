<?php
namespace App\Models;
class Adresse extends Model{
    private int $id;
    private string $ville;
    private string $quartier;
    
//one to one avec Professeur 
public function professeur():Professeur{
    $sql=" select * from adresse a,
        professeur p where a.professeur_id=p.id and p.id={$this->id} ";
    return new Professeur;
}
//one to one avec Etudiant 
public function etudiant():Etudiant{
    $sql=" select * from adresse a,
        etudiant e where a.etudiant_id=e.id and e.id={$this->id} ";
    return new Etudiant;
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
     * Get the value of ville
     */ 
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Set the value of ville
     *
     * @return  self
     */ 
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

    /**
     * Get the value of quartier
     */ 
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * Set the value of quartier
     *
     * @return  self
     */ 
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;

        return $this;
    }
}