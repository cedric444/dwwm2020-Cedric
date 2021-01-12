<?php
$id = $POST["idRegion"];
echo json_encode(DepartementsManager::getListByRegion(true, $id));