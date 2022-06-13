/* code de confirmation quand l'inscription c'est déroulée correctement */
<?php
session_start();
if(isset($_SESSION['prenom'])){//isset vérifie si la variable à bien été déclarée et n'est pas NULL
    echo 'Bonjour'. $_SESSION['prenom'];
}
?>

<?php
include './php/include/header.php';// include permet d'inclure un fichier
?>
<h1>Votre inscription à bien été prise en compte ! Merci !</h1>

<a href="./view_login.php">Retour à l'accueil</a>

<?php
include './php/include/footer.php';
?>
