<?php
namespace App\Models;
use App\Core\Model;

//Classe Concrete ( signie lorsqu'elle est instanciable)
//Classe Astraite (elle ne produit pas d'objet )
//Classe final (elle ne produit pas de classe, "on ne peut pas redéfinir les méthodes" )
class User extends Model {
    
    //Attributs Instances (attribut qui est spécifique a chaque objet  )
    //protected veut dire que les attribut sont accessibles au niveau des classes filles mais aussi au niveau de la classe mère
    protected int $id;
    protected string $login;
    protected string $password;
    protected string $role;
    //Attribut static
    protected static string $table="users";

    //Methodes
    //construteur (il est appelé quand on veut creer un objet " Methodes qui permet de creer les objet")
    public function __contruct(){
        self::$table="user";
    }

    
    //Getters 
    

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    //Setters 

    

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
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

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