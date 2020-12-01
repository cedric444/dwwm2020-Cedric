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
        <?php echo'<div class="titre">'. texte('GestProd').'</div>';?>
        <div class="lang">
            <div>
                <a href="<?php echo $uri ?> lang=EN">
                    <img src="IMG/flag-gb.png" alt="drapeau anglais"></a>
            </div>
            <div></div>
            <div>
                <a href="<?php echo $uri ?> lang=FR">
                    <img src="IMG/flag-fr.png" alt="drapeau français"></a>
            </div>
            <div></div>
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
