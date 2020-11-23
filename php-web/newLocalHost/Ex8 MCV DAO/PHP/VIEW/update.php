<?php

//var_dump($_POST);
$prod= new Produits($_POST);
//var_dump($prod);
ProduitsManager::update($prod);

header("location:index.php?code=default");


