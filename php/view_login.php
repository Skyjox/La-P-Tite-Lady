
<?php
include "./include/header.php";
?>
<div class="allog">
<fieldset>
    <legend>Connexion</legend>

    <form action="./log_exec.php" method="POST" id="login">
        <label for="nom">Nom </label><br>
        <input type="text" name="nom" id="nom"><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" id="password">
        <div id="submit">
        <button class="boutton" type="submit" name="submit">Envoyer</button>
        </div>
    </form>
</fieldset>
</div>
<div class="allog2">
<fieldset>
    <legend>Pas encore inscrit ?</legend>
    <a id="connexion" href="./view_insc.php">S'inscrire </a>
</fieldset>
</div>
<?php
include './include/footer.php';
?>
