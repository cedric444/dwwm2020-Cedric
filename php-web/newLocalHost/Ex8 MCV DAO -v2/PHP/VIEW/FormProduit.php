<?php

$mode= $_GET['mode'];
if (isset ($_GET['id']))
{
    $idProduit= $_GET['id'];
    if($idProduit!=false)
    {
        $produit= ProduitsManager::findById($idProduit);
    }
}


switch($mode)
{
    case 'ajout':
    {
        echo'<form method="POST" action="index.php?code=formProduit&mode=ajout">';
        break;        
    }
    case 'update':
    {
        echo'<form method="POST" action="index.php?code=formProduit&mode=update"/>
        <input name="idProduit" value="'.$produit->getIdProduit().'" type="hidden"/>';
        break;
    }
    case 'delete':
    {
        echo'<form method="POST" action="index.php?code=formProduit&mode=delete">
        <input name="idProduit" value="'.$produit->getIdProduit().'" type="hidden"/>';
        break;
    }
}
?>

<label for="libelleProduit">Libelle Produit : </label>
<input name="libelleProduit" <?php if($mode!='ajout') {echo'value="'.$produit->getLibelleProduit().'"';} else{echo'placeholder="libelle produit"';} if($mode=='delete'){echo'disabled';}?>/>
<label for="prix">Prix : </label>
<input name="prix" <?php if($mode!='ajout') {echo'value='.$produit->getPrix().'';} else{echo'placeholder="prix"';} if($mode=='delete'){echo'disabled';}?>>
<label for="dateDePeremption">Date de peremption : </label>
<input name="dateDePeremption" <?php if($mode!='ajout') {echo'value ="'.$produit->getDateDePeremption().'"';} else{echo'placeholder="date de peremption"';} if($mode=='delete'){echo'disabled';}?>/>


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
echo'<button type="reset"><a href="index.php?code=default">Annuler</a></button>';