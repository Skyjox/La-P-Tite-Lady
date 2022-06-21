<?php
session_start();
$id=$_GET['id'];
if(!empty($_POST)){
    $classe=$_POST['classe'];
    $taille=$_POST['taille'];
    $prix=$_POST['prix'];
    require './connection.php';
    $req=$pdo->prepare("UPDATE articles SET classe = ?, taille = ?, prix=? WHERE id = ?");
    $req->execute(array($classe, $taille, $prix, $id));
    if($_SESSION['user_kind'] ==1){
    header ('location: ./view_admin.php');
    } else{
        header('location: ./view_membre.php');
    }
}
?>
<?php
include "./include/header_connect.php";
?>
<div class="allog">
<fieldset >
    <legend>Modification</legend>

    <form action="#" method="POST"id="login" >
        <label for="classe">Nouvelle Classe</label>
        <input type="text" name="classe" >

        <label for="taille">Nouvelle Taille</label>
        <input type="text" name="taille">

        <label for="prix">Nouveau Prix</label>
        <input type="number" step="any" name="prix">

        <div id="submit">
            <button class="boutton" type="submit" name="submit">Envoyer</button>
        </div>
    </form>
</fieldset>

</div>
<div class="back">
    <?php
    if($_SESSION['user_kind']==1){
   echo '<a href="./view_admin.php"><button>Retour</button></a>';}
    else{
        echo '<a href="./view_membre.php"><button>Retour</button></a>';
    }
     ?>
</div>
<?php
include "./include/footer.php";
?>
