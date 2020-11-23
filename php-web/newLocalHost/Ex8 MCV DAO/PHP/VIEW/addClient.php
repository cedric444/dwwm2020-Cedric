<?php
include 'head.php';
include 'header.php';
$cl= new Clients($_POST);
ClientsManager::add($cl);

header('Location:../../index.php');