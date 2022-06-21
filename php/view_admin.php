<?php
session_start();
if(empty($_SESSION['nom'])){
    header('location: ./login/php');
}else{
    if($_SESSION['user_kind'] !=1){
        header('location: ./login.php');
    }
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
            echo"<a href='./view_update_art.php?id=$data->id'> Modifier </a>";
            echo "</td>";
            echo "<td>";
            echo "<a href='./delete_art.php?id=$data->id'>Supprimer</a>";
            echo "</td></tr>";
        }
        ?>

    </table>
    </fieldset>
        </div>
            <div class="membres">
            <fieldset class="gestmembre">
                <legend>Liste des Membres</legend>
                <table>
                    <tr> <th>Nom</th> <th>Prenom</th> <th>Mail</th> </tr>
                    <?php
                    include "./connetion.php";
                    $req=$pdo->query("SELECT*FROM user");
                    while($data= $req->fetch()){
                        echo "<tr><td>$data->nom</td> <td>$data->prenom</td> <td>$data->mail</td>";
                        echo "<td>";
                        echo "<a href='./view_update_membre.php?id=$data->id'>Modifier </a>";
                        echo "</td>";
                        echo "<td>";
                        echo "<a href='./delete_membre.php?id=$data->id'>Supprimer</a>";
                        echo "</td></tr>";
                    }
                    ?>
                </table>
            </fieldset>
    </div>
</div>
<div class="back1">
    <a class="add" href="./view_addartdb.php"><button>Insérer de nouveaux articles</button></a>
</div>
<div class="back">
    <a href="./view_dashboard.php"><button>Retour</button></a>
</div>

<?php
include './include/footer.php';
?>
