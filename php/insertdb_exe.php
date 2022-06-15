<?php

include './secure.php';

if (!empty($_POST)) {
    $errors = array();
    if (empty($_POST['classe'])) {
        echo 'faux 1';
    }
    if (empty($_POST['taille'])) {
        echo 'faux2';
    }
    if (empty($_POST['prix'])) {
        echo 'faux3';
    } else {
        $titre = valid_donnees($_POST['classe']);
        $auteur = valid_donnees($_POST['taille']);
        $annee = valid_donnees($_POST['prix']);

        require "./connection.php";
        $req = $pdo->prepare("INSERT INTO articles SET classe= ?, taille = ?, prix = ?");
        $req->execute([$_POST['classe'], $_POST['taille'], $_POST['prix']]);
        header('location: ./view_addartdb.php');

        exit();
    }
}
if (isset($errors)) {
    $_SESSION['erreur'] = $errors;
    header("location: ./view_login.php");
}
?>