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
<body>
    <header>
        <div class="logo">
            <?php
            if (file_exists("IMG/icone.jpg"))
            {
                echo'<img src="./IMG/icone.jpg")>';
            }
            else
            {
                echo'<img src="../../IMG/icone.jpg" alt="icone">';
            }
            ?>
            
        </div>
        <?php echo'<div class="titre"><h1>GESTION DES NOTES</h1></div>';?>
        <div class="connect">
            <?php
            if (isset($_SESSION['utilisateur']))
            {
                echo'<a class="btnConnect" href="index.php?c=Actiondeconnexion">Déconnectez-vous</a>';
            }
            else
            {
                echo'<a class="btnConnect" href="index.php?c=formConnexion">Connectez-vous</a>';
            }
            ?>
        </div>
    </header>
    <div class ="espaceHor white"></div>
