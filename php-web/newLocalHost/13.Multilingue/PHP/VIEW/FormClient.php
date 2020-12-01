<?php

$mode= $_GET['mode'];
if (isset ($_GET['id']))
{
    $idClient= $_GET['id'];
    if($idClient!=false)
    {
        $client= ClientsManager::findById($idClient);
    }
}

switch($mode)
{
    case 'ajout':
    {
        echo'<form method="POST" action="index.php?code=actionClient&mode=ajout">';
        break;        
    }
    case 'update':
    {
        echo'<form method="POST" action="index.php?code=actionClient&mode=update"/>
        <input name="idClient" value='.$client->getIdClient().' type="hidden"/>';
        
        break;
    }
    case 'delete':
    {
        echo'<form method="POST" action="index.php?code=actionClient&mode=delete">
        <input name="idClient" value='.$client->getIdClient().' type="hidden"/>';
        
        break;
    }
}
?>

<label for="nomClient">Nom : </label>
<input name="nomClient" <?php if($mode!="ajout") {echo'value="'.$client->getNomClient().'"';} else{echo'placeholder="nom du client"';} if($mode=="delete"){echo'disabled';}?>/>
<label for="prenomClient">Prenom : </label>
<input name="prenomClient" <?php if($mode!="ajout") {echo'value="'.$client->getPrenomClient().'"';} else{echo'placeholder="prénom du client"';} if($mode=="delete"){echo'disabled';}?>>
<label for="codePostal">Date de peremption : </label>
<input name="codePostal" <?php if($mode!="ajout") {echo'value ="'.$client->getCodePostal().'"';} else{echo'placeholder="code postal"';} if($mode=="delete"){echo'disabled';}?>/>
<label for="ville">Ville : </label>
<input name="ville" <?php if($mode!="ajout") {echo'value ="'.$client->getVille().'"';} else{echo'placeholder="ville"';} if($mode=='delete'){echo'disabled';}?>/>

<?php

switch($mode)
{
    case 'ajout':
    {
        echo'<button type="submit">Ajouter</button>';
        break;        
    }
    case 'update':
    {
        echo'<button type="submit">Modifier</button>';
        break;
    }
    case 'delete':
    {
        echo'<button type="submit">Supprimer</button>';
        break;
    }
}
echo'<button type="reset"><a href="index.php?code=listeClients">Annuler</a></button>';