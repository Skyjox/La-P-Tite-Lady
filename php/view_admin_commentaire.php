<?php
session_start();
if(empty($_SESSION['nom'])){
    header('location: ./login.php');
}else{
    if($_SESSION['user_kind']!=1){
       header('location: ./login.php');
    }
}
include './include/header_connect.php';
?>
<div class="allog">
    <fieldset class="tablecommentaire">
        <legend class="titre">Listes des commentaires</legend>
        <table class="vac">
        <tr> <th class="nom">Nom</th> <th class="avis">Commentaire</th> <th class="times">date et heure</th><th class="action">Action</th></tr>
        <?php

        require './connection.php';
        $req=$pdo->query("SELECT * FROM commentaire");
        $req->execute();

        while($data=$req->fetch()){
            echo '<tr> <td class="nom">'. $data->userid .'</td> <td class="avis">'. $data->commentaire.'</td> <td class="times">'. $data->timestamp .'</td>';
            echo "<td class='dcom'>";
            echo "<a  href='./delete_comdb.php?id=$data->id'>Supprimer</a>";
            echo '</td></tr>';
        }
        ?>
        </table>
    </fieldset>
</div>
<div class="back">
    <a href="./view_dashboard.php"><button>Retour</button></a>
</div>

<?php
include './include/footer.php';
?>
