<?php

$liste = SessionsFormationsManager::getList(false);

foreach($liste as $elt)
{
    $elt->getNumOffreFormation();
}