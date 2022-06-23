<?php
session_start();
if(empty($_SESSION['nom'])){
    header('location: ./php/view_login.php');
}


include "./include/header_connect.php";
?>
        <div class="cssp">
             <p >
                Bonjour <?=$_SESSION['nom']?>,<!--intégration de la variable $_SESSION pour personnaliser le texte bonjour -->
                <?php if($_SESSION['user_kind'] == 1){echo " Vous êtes connecté en administrateur.";}?>
            </p>
        </div>


        <div class="allog1">
    <fieldset>
        <legend>Que souhaitez-vous faire</legend>
        <div class="cssa1">
            <?php if($_SESSION['user_kind'] == 1){
            echo "<a class='a' href='./view_admin.php'> Gérer les membres et les articles </a><br><br>";
            echo " <br>";
            echo "<a class='a' href='./view_admin_commentaire.php'>Modérer les commentaires</a>";
            }else{ echo "<a class='a' href='./view_membre.php'> Voir mes articles où laisser un avis</a><br><br>";}
        ?>
        </div>
        <div class="cssa">
            <a class="a" href="./view_update_membre.php">Modifier mon profil</a>
        </div>
        <br>
        <div class="cssa">
            <a class='a' href="./deconnect.php">Déconnexion</a><br><br>
        </div>
        <div class="cssa">
            <a class='a' href="index.php"> Retour</a>
        </div>

    </fieldset>
        </div>

<?php
include "./include/footer.php";
?>