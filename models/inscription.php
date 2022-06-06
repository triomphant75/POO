<?php
namespace App\Models;
class Inscription implements IModel {
    private int $id;
    private DateTime $dateInscription;
    private string $annee;

    
    public function insert(){
        $sql="insert into inscriptions(date_inscription,annee) value ( {$this->dateInscription},{$this->annee})";
    }
    public function update(){
        $sql="update  inscriptions set date_inscription={$this->dateInscription},annee={$this->annee} where id={$this->id}";
    }
    public static function selectAll(){
        $spl= "select * from inscriptions";
    }
    public static function delete(int $id){
        $sql="delete from inscriptions where id={$id}";
    }
    public static function selectByid(int $id){
        $spl= "select * from inscriptions where id={$id}";
    } 

    //les attributs navigationnels 
    //many to one avec classe 
    public function classe():Classe{
        $spl= "select c.* from inscriptions i,classes c where c.id=i.classe_id and i.id={$id}";
        return new Classe();

    }
    //many to one avec Etudiant
    public function etudiant():Etudiant{
        $spl= "select e.* from inscriptions i,etudiants e where e.id=i.etudiant_id and i.id={$id}";
        return new Etudiant();
    }
    
    public function __construct() {}

    /**
     * Get the value of dateIns
     */ 
    public function getDateIns()
    {
        return $this->dateIns;
    }

    /**
     * Set the value of dateIns
     *
     * @return  self
     */ 
    public function setDateIns($dateIns)
    {
        $this->dateIns = $dateIns;

        return $this;
    }

    /**
     * Get the value of annee
     */ 
    public function getAnnee()
    {
        return $this->annee;
    }

    /**
     * Set the value of annee
     *
     * @return  self
     */ 
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get the value of etudiant
     */ 
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Set the value of etudiant
     *
     * @return  self
     */ 
    public function setEtudiant($etudiant)
    {
        $this->etudiant = $etudiant;

        return $this;
    }
}