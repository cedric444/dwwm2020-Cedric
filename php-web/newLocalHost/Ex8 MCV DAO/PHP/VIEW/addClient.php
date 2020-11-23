<?php

$cl= new Clients($_POST);
ClientsManager::add($cl);

header('Location:../../index.php');