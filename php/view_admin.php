<?php
session_start();
if(empty($_SESSION['nom'])){
    header('location: ./login/php');
}
include "./include/header.php";
?>
<div class="admin">
    <div class="article">
<fieldset class="gestarticle">
    <legend class="titre">Liste des articles</legend>
    <table>
        <tr><th>ID</th><th>Type</th> <th>Taille</th><th>Prix</th> </tr>

        <?php
        require "./connection.php";
        $req = $pdo->query("SELECT * FROM articles");
        while($data = $req->fetch()){

            echo "<tr> <td>$data->id</td><td>$data->titre</td><td>$data->annee</td>";
            echo"<td>";
            echo"<a href='./update_art.php?id=$data->id'> Modifier </a>";
            echo "<a href='./delete_db.php?id=$data->id'>Supprimer</a>";
            echo "</td></tr>";
        }
        ?>
        <a href="view_addartdb.php">Insérer de nouveaux articles</a>
    </table>
    </fieldset>
        </div>
            <div class="membres">
            <fieldset class="gestmembre">
                <legend>Liste des Membres</legend>
                <table>
                    <tr> <th>ID</th> <th>Nom</th> <th>Prenom</th> <th>Mail</th> </tr>
                    <?php
                    include "./connetion.php";
                    $req=$pdo->query("SELECT*FROM user");
                    while($data= $req->fetch()){
                        echo "<tr> <td>$data->id</td> <td>$data->nom</td> <td>$data->prenom</td> <td>$data->mail</td>";
                        echo "<td>";
                        echo "<a href='./update_membre.php?id=$data->id'>Modifier </a>";
                        echo "<a href='./delete_membre.php?id=$data->id'>Supprimer</a>";
                        echo "</td></tr>";
                    }
                    ?>
                </table>
            </fieldset>
    </div>
</div>

<?php
include './include/footer.php';
?>
