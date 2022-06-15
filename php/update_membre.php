<?php
session_start();
$id=$_GET['id'];
if(!empty($_POST)){
    $nom=$_POST['nom'];
    $prenom=$_POST['prenom'];
    $password=$_POST['password'];
    $mail=$_POST['mail'];
    $adresse=$_POST['adresse'];
    $telephone=$_POST['telephone'];
    require './connection.php';
    $req=$pdo->prepare("UPDATE user SET nom = ?, prenom = ?, password =?, mail= ?, adresse=?, telephone=? WHERE id = ?");
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $req->execute(array($nom, $prenom, $password, $mail, $adresse, $telephone, $id));
    header ('location: ./view_admin.php');
}
?>
<?php
if($_POST['password'] !== $_POST['compassword']){echo 'Les mots de passe de correspondent pas ';}
if($_POST['mail'] !== $_POST['commail']){ echo 'les adresses e-mails sont différentes';}
?>
<?php
include "./include/header_connect.php";
?>
<div class="allog">
    <fieldset >
        <legend>Modification</legend>

        <form action="#" method="POST"id="login" >
            <label for="nom">Nouveau Nom</label><br>
            <input type="text" name="nom" ><br>

            <label for="prenom">Nouveau Prenom</label><br>
            <input type="text" name="prenom"><br>

            <label for="password">Nouveau Password</label><br>
            <input type="password" name="password" ><br>

            <label for="compassword">Confirmer votre mot de passe</label><br>
            <input type="password" name="compassword" id="comp" ><br>

            <label for="mail"> Nouvelle Adresse e-mail</label>
            <input type="mail" name="mail"><br>

            <label for="commaim">Confirmer votre adresse mail</label><br>
            <input type="mail" name="commail"><br>

            <label for="adresse">Nouvelle adresse</label>
            <input type="text" name="adresse">

            <label for="telephone">Nouveau numéro de téléphone</label>
            <input type="number" name="telephone">

            <div id="submit">
                <button class="boutton" type="submit" name="submit">Envoyer</button>
            </div>


        </form>
    </fieldset>


</div>
<div class="back">
<?php
 if($_POST['user_kind'] ==1 ){echo '<a href="./view_admin.php"><button>Retour</button></a>';}
 else{ echo'<a href="./view_dashboard.php"><button>Retour</button></a>';}
    ?>
</div>

<?php
include "./include/footer.php";
?>
