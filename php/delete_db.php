<?php
session_start();
$id=$_GET['id'];

require "./connexion.php";

$req=$pdo->prepare("DELETE FROM articles WHERE id =?");
$req->execute(array($id));

exit(header('location: ./gest_art.php'));

?>
