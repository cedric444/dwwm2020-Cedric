<?php

$idClient= $_POST["id"];
$supp =ClientsManager::findById($idClient);
ClientsManager::delete($supp);

header("location:index.php?code=default2");