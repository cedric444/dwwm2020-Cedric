<body class="colonne">
    <header>
        <div class="espace"></div>
        <div class="titre"><?php echo $titre ?></div>
        <div class= "connect colonne">
            <?php
            if(isset($_SESSION['users']))
            {
                echo'<div>Bonjour '.$_SESSION['users']->getNomUser().'</div>';
                echo'<div><a href="index.php?codePage=deconnection>Déconnecter</></div>';
            }
            else
            {
                echo '<a href="index.php?codePage=connection">Connecter</a>';
            }
            ?>
        </div>
    </header>