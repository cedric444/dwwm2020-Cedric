<div class="colonne">
    <div>
        <div class="espace"></div>
        <div class="titre"><?php echo texte('Bienvenue');?><?php if (isset($_SESSION["user"])) echo $_SESSION['user']->getNomUser().' '.$_SESSION['user']->getPrenomUser();?></div>
        <div class="espace"></div>
    </div> 
</div>
