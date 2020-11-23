<?php

include 'head.php';
include 'header.php';

$cl= new Clients($_POST);
var_dump($cl);
ClientsManager::update($cl);

/*header('location:../../index.php');*/