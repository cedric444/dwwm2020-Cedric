<?php
//var_dump($_POST);
$supp= new Produits($_POST);
//var_dump($supp);
ProduitsManager::delete($supp);

/*header('Location:index.php?code=default');*/