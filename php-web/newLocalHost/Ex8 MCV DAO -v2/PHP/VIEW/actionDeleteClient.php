<?php

$supp= new Clients($_POST);

ClientsManager::delete($supp);

header("location:index.php?code=listeClients");