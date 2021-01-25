<?php
//fichier pour appel AJAX
include "SessionsFormationsManager.php";
include "../CONTROLLER/Parametres.Class.php";
include "../CONTROLLER/SessionsFormations.Class.php";
include "DbConnect.Class.php";
Parametres::init();
DbConnect::init();
echo json_encode(SessionsFormationsManager::getByFormation(true));
