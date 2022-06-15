<?php
session_start();
$id=$_GET['id'];

require "./connection.php";

$req=$pdo->prepare("DELETE FROM user WHERE id =?");
$req->execute(array($id));

exit(header('location: ./view_admin.php'));

?>
