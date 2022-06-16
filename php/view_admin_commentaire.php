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
<div>
    <fieldset>
        <legend>Listes des commentaires</legend>
        <tr> <th>Nom</th> <th>commentaire</th> <th>date et heure</th></tr>
        <?php
        require './connection.php';
        $req=$pdo->query("SELECT * FROM commentaire INNER JOIN user ON user.nom = commentaire.commentaire");
        while($data=$req->fetch()){
            echo '<tr> <td>$data->nom</td> <td>$data->commentaire</td> <td>$data->timestamp</td>';
            echo '<td>';
            echo '<a href="$da"'
        }
        ?>


    </fieldset>
</div>








<?php
include './include/footer.php';
?>
