<?php
session_start();
if($_SESSION['userkind'] != 1){
    header('location: ./login.php');
}
$id=$_GET['id'];


require "./connection.php";

$req=$pdo->prepare("DELETE FROM commentaire WHERE id =?");
$req->execute(array($id));

exit(header('location: ./view_admin_commentaire.php'));

?>