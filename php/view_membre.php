<?php
session_start();
if(empty($_SESSION['nom'])){
header('location: ./login/php');
}
include "./include/header_connect.php";
?>

<div class="admin">
    <div class="article">
        <fieldset class="gestarticle">
            <legend class="titre">Liste des articles</legend>
            <table>
                <tr><th>Type</th> <th>Taille</th><th>Prix</th> </tr>

                <?php
                require "./connection.php";
                $req = $pdo->query("SELECT * FROM articles");
                while($data = $req->fetch()){

                    echo "<tr> <td>$data->classe</td><td>$data->taille</td><td>$data->prix €</td>";
                    echo"<td>";
                    echo"<a href='./update_art.php?id=$data->id'> Modifier </a>";
                    echo "</td>";
                    echo "<td>";
                    if($_POST['user_kind']==1){echo '<a href="./delete.php?=$data->id">Supprimer</a>';}
                    echo "</td></tr>";
                }
                ?>
            </table>
        </fieldset>
    </div>

    <div class="article">
        <fieldset class="gestmembre">
            <legend>Ajouter un commentaire, un avis</legend>

            <label for="avis"></label>
            <input type="text" name="avis">
        </fieldset>
    </div>
</div>
    <div class="back">
        <a href="./view_dashboard.php"><button>Retour</button></a>
    </div>
