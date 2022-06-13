<?php
include "./include/header.php";
?>
<fieldset>
    <legend>Connexion</legend>
    <form action="./log_exec.php" method="POST">
        <label for="nom">Nom </label>
        <input type="text" name="nom" id="nom">

        <label for="password">Mot de passe</label>
        <input type="password" name="password" id="password">

        <button type="submit" name="submit">Envoyer</button>
    </form>
</fieldset>
<fieldset>
    <a href="./view_insc.php">S'inscrire ?</a>
</fieldset>
<?php
include './include/footer.php';
?>
