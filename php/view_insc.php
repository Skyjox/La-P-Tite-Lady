<?php
include './include/header.php';
?>

<div class="allog">
<fieldset>
    <legend>Bienvenue</legend>

    <form action="./inscription.php" method="POST" id="inscription">
        <label for="nom">Nom</label>
        <input type="text" name="nom" id="nom" required>

        <label for="prenom">Prenom</label>
        <input type="text" name="prenom" id="prenom" required>

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="mdp" required>

        <label for="compassword">Confirmer votre mot de passe</label>
        <input type="password" name="compassword" id="comp" required>

        <label for="mail">e-mail</label>
        <input type="email" name="mail" id="mail" required>

        <label for="confmail">Confirmer votre e-mail</label>
        <input type="mail" name="confmail" id="confmail" required>
        
        <label for="telephone">Téléphone</label>
        <input type="tel" name="telephone" id="telephone" placeholder="0123456789" onFocus="this.placeholder='';">

        <label for="adresse">Votre Adresse</label>

        <input type="text" name="adresse" id="numero" placeholder="10 rue de la république 75000 Paris" onFocus="this.placeholder='';">



        
        <div id="submit">
        <button type="submit">Inscription</button>
        </div>

    </form>
</fieldset><br><br>
</div>
<div class="allog2">
<fieldset >
    <legend>Déjà inscrit ? </legend>
        <a id="connexion" href="./view_login.php">Connexion</a>
</fieldset>
</div>



<?php
include './include/footer.php';
?>
