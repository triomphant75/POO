<?php
require_once("../vendor/autoload.php");
//Front controller
//Url localhost:8000
//importer notre class (avec require_once )
//Chargement Manuel
//require_once("../models/User.php");
//require_once("../models/RP.php");
//require_once("../models/AC.php");
//creation d'odject
//$rp=new RP();
//declarer les etats 
//$rp->setId(1)
     //->setLogin("douvewane")
     //->setPassword("douve");

//echo $rp->getRole("ROLE_RP");

//Auto loading (chargement automatique)
//pour faire Autolg il faut les Namespace (ensemble de classe du meme domaine)
//namespace c'est un repertoire virtuel pour ranger nos classes 
     //namespace Model on n'y range toutes les classes models
     //namespace Controllers on n'y range toutes les classes controllers
     //namespace Core on n'y range toutes les classes réutilisables
//Composer (gestion des dépendances)
     //Gestionaire (a pour role de telecharger + configurer nos dependance)
     //Dépendance (ensemble de classes réutilisables )
          //https://packagist.org
     //Hub de dependance (site de dependance suivant le langage)
use App\Models\RP;
$rp = new RP();
