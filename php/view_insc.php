<?php
include './include/header.php';
?>

<div class="allin">
<fieldset>
    <legend>Bienvenue</legend>

    <form action="./inscription.php" method="POST" id="inscription">
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" id="nom" required><br>

        <label for="prenom">Prenom</label><br>
        <input type="text" name="prenom" id="prenom" required><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" id="mdp" required><br>

        <label for="compassword">Confirmer votre mot de passe</label><br>
        <input type="password" name="compassword" id="comp" required><br>

        <label for="mail">e-mail</label><br>
        <input type="email" name="mail" id="mail" required><br>

        <label for="confmail">Confirmer votre e-mail</label><br>
        <input type="mail" name="confmail" id="confmail" required><br>
        
        <label for="telephone">Téléphone</label>
        <input type="tel" name="telephone" id="telephone" value="0123456789" onFocus="this.value='';">

        <label for="adresse">Votre Adresse</label>
        <div class="adresse">
        <input type="text" name="adresse" id="numero" value="10 rue de la république 75000 Paris" onFocus="this.value='';">

        </div>

        
        <div id="submit">
        <button type="submit">Inscription</button>
        </div>

    </form>
</fieldset><br><br>
</div>
<div class="allin2">
<fieldset >
    <legend>Déjà inscrit ? </legend>
        <a id="connexion" href="./view_login.php">Connexion</a>
</fieldset>
</div>



<?php
include './include/footer.php';
?>
