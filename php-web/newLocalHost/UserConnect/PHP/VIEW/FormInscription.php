<form action="index.php?codePage=actionInscription" method="POST">

<div>
    <label for="nomUser">Nom :</label>
    <input type="text" name="nomUser" required/>
</div>
<div>
    <label for="prenomUser">Prenom :</label>
    <input type="text" name="prenomUser" required/>
</div>
<div>
    <label for="motDePasse">Mot de passe :</label>
    <input type="text" name="motDePasse" required/>
</div>
<div>
    <label for="confirmation">Confirmation du mot de passe :</label>
    <input type="text" name="confirmation" required/>
</div>
<div>
    <label for="adresseMail">Adresse mail :</label>
    <input type="text" name="adresseMail" required/>
</div>
<div>
    <label for="role">Role(1 admin 2 user) :</label>
    <input type="text" name="role" required/>
</div>
<div>
    <label for="pseudo">¨Pseudo :</label>
    <input type="text" name="pseudo" required/>
</div>

<button type="submit">Ajouter</button>
</form>