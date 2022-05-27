<?php
//Front controller
//Url localhost:8000
//importer notre class (avec require_once )
//Chargement Manuel
require_once("../models/User.php");
require_once("../models/RP.php");
//creation d'odject
$rp=new RP();
//declarer les etats 
$rp->setId(1)
     ->setLogin("douvewane")
     ->setPassword("douve");

echo $rp->getRole("ROLE_RP");