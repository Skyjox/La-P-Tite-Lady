<?php
session_start();
if(empty($_SESSION['nom'])){
    header('location: ./php/view_login.php');
}


include "./php/include/header.php";
?>
    <div id="order">

        <p>
            Bonjour <?=$_SESSION['nom']?>,<!--intégration de la variable $_SESSION pour personnaliser le texte bonjour -->
            <?php if($_SESSION['user_kind'] == 1){echo " Vous êtes admin";}?>
            Que souhaitez-vous faire  </p>



        <?php if($_SESSION['user_kind'] == 1){
            echo "<a href='./gest_member.php'> Gérer les membres </a><br><br>";
        }

        ?>


        <a href="./gest_art.php">Gérer les articles</a><br><br>

        <a href="./php/deconnect.php">Déconnexion</a>

        <a href="./php/view_insc.php"> Retour</a>


    </div>
<?php
include "./php/include/footer.php";
?>