<?php

include 'head.php';
$prod= new Produits($_POST);
ProduitsManager::update($prod);

header("location:../../index.php");


