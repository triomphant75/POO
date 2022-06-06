<?php
namespace App\Core;
interface IModel{

    public function insert();
    public function update();
    public static function delete(int $id);
    public static function selectAll();
    public static function selectByid(int $id);
    public static function selectWhere(string  $sql,array $data=[],$single=false);
    //select * from classe where niveau like "L1"
    //select * from user where login like 'douve' and password like 'douv

    //Methodes d'intances ( elle s'applique sur un objet et utilise l'etat de l'objet )
    /**
     * $classe = new Classe ()
     * $classe -> setlibelle ('L2 GLRS')
     * $classe -> insert() //insert into classe (libelle) values ('L2 GLRS')
     * $classe -> setId(1)
     * $classe -> delete //delete from classe 
     */



    //Methode Statique (elle s'applique sur une classe et n'utilise pas l'etat d'un objet )
    /**
     * classe::meethode ()
     * classe::delete ()
     * classe::selectAll()
     * classe::selecltById ()
     */

}