<!--code de confirmation quand l'inscription, c'est déroulée correctement -->
<?php
session_start();
if(isset($_SESSION['prenom'])){//isset vérifie si la variable à bien été déclarée et n'est pas NULL
    echo 'Bonjour'. $_SESSION['prenom'];
}
?>

<?php
include './include/header.php';// include permet d'inclure un fichier
?>
<div class="allog">
<fieldset>
    <legend>Félicitation !</legend>
    <br>
        <h3 class="confirm">Votre inscription à bien été prise en compte ! Merci !</h3><br>
</fieldset>
</div>
<div class="allog2">
<fieldset>
    <a id="connexion" href="./view_login.php">Revenir à mon compte</a>
</fieldset>
</div>

<?php
include './include/footer.php';
?>
