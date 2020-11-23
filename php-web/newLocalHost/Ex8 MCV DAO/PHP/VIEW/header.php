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
        <div class="titre">Gestion des produits</div>
        <div class="logo"></div>
    </header>
