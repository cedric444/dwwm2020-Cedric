<nav>
<?php
    if (isset($_SESSION["user"])&& $_SESSION["user"]->getIdRole()==1)
    {
        echo '<div><a class="centre size" href="index.php?c=listeUsers">';?><?php echo texte("btnusernav");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?c=listeRoles">';?><?php echo texte("btnrolenav");?><?php echo'</a></div>';

    }
    echo '<div><a class="centre size" href="index.php?c=listeProduits">';?><?php echo texte("btnproduitnav");?><?php echo'</a></div>';
  
    if (!isset($_SESSION["user"]))
    {
        echo '<div><a class="centre size" href="index.php?c=listeClients">';?><?php echo texte("btnsclientnav");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?c=listeVentes">';?><?php echo texte("btnventenav");?><?php echo' </a></div>
        <div><a class=" size" href="index.php?c=formInscription">';?><?php echo texte("btninscnav");?><?php echo'</a></div>
        <div><a class="centre size" href="index.php?c=formConnexion">';?><?php echo texte("btnconnectnav");?><?php echo'</a></div>';
    }


    if (isset($_SESSION["user"]))
    {
        echo '<div><a class=" size" href="index.php?c=listeClients">';?><?php echo texte("btnsclientnav");?><?php echo'</a></div>
        <div><a class=" size" href="index.php?c=listeProduits">';?><?php echo texte("btnprodnav");?><?php echo'</a></div>
        <div><a class=" size" href="index.php?c=listeRepresentants">';?><?php echo texte("btnrepresnav");?><?php echo' </a></div>
        <div><a class=" size" href="index.php?c=listeVentes">';?><?php echo texte("btnventenav");?><?php echo' </a></div>
        <div><a class=" size" href="index.php?c=formInscription">';?><?php echo texte("btninscnav");?><?php echo'</a></div>
        <div><a class=" size" href="index.php?c=actionDeconnexion">';?><?php echo texte("btndeconnectnav");?><?php echo'</a></div>';
    }

    ?>
</nav>