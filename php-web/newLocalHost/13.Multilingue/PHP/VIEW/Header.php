<?php
$uri= $_SERVER['REQUEST_URI'];
if(substr($uri, strlen($uri) -1) == "/")
{
    $uri.='index.php?';
}
else if (in_array("?", str_split($uri)))
{
    $uri.='&';
}
else
{
    $uri.='?';
}
?>
<body class>
    <header>
        <div class="logo">
            <?php
            if (file_exists("IMG/Logo_Afpa.jpg"))
            {
                echo'<img src="./IMG/Logo_Afpa.jpg")>';
            }
            else
            {
                echo'<img src="../../IMG/Logo_Afpa.jpg" alt="logo afpa">';
            }
            ?>
            
        </div>
        <div class="titre"><?php texte('Gestion des produits');?></div>
        <div class="logo">
            <?php
            if (isset($_SESSION['user']))
            {
                echo'<div>'. $_SESSION['user']->getPseudo().'</div><br>
                <a href="index.php?code=deconnection">'.texte('Déconnexion').'</a>';
            }
            else
            {
                echo'<a href="index.php?code=formConnexion">'.texte('Connexion').'</a>';
            }
            ?>
        </div>
    </header>
