
<?php

include './secure.php';


if(!empty($_POST)){
    $errors = array();


    if(empty($_POST['commentaire'])){
        echo 'Commentaire vide ';
    }
    else{
        $commentaire = valid_donnees($_POST['commentaire']);

        require './connection.php';
        $req = $pdo->prepare("INSERT  INTO commentaire SET commentaire =?, timestamp = NOW() ");
        $req->execute([$_POST['commentaire']]);
        header('location: ./view_membre.php');

        exit();
    }

}
if (isset($errors)) {
    $_SESSION['erreur'] = $errors;
    header("location: ./view_dashboard.php");
}
?>