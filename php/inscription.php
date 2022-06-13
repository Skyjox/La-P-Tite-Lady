<?php
include './secure.php';

if(!empty($_POST)){
$errors = array();

if(empty($_POST['nom'])){
echo 'Champ vide';
}
elseif(empty($_POST['prenom'])) {
echo 'Champs vide';
}
elseif(strlen($_POST['password'])<6){
echo 'Champ vide';
}
elseif(empty($_POST['compassword'])){
echo 'Champ vide ';
}
elseif (($_POST['password']) != ($_POST['compassword'])){
echo 'les mots de passe ne correspondent pas ';
}
elseif(empty($_POST['mail'])){
    echo 'e-mail vide';
}
elseif (($_POST['mail']) != ($_POST['confmail'])){
    echo 'e-mail différent';
}

else{

$nom = valid_donnees($_POST['nom']);
$prenom = valid_donnees($_POST['prenom']);
$mail= valid_donnees($_POST['mail']);
$adresse='à définir';
$telephone='0000000000';


require "./connection.php";
if(!isset($_POST['user_kind'])){
    $_POST['user_kind'] = 2;
}


$req = $pdo->prepare("INSERT INTO user SET nom = ?, prenom = ?, password = ?, mail = ?, adresse = ?, telephone = ?, user_kind= ?");
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);//
$req->execute([$_POST['nom'], $_POST['prenom'], $password, $_POST['mail'], $_POST['adresse'], $_POST['telephone'], $_POST['user_kind']]);
header('location: ./confirmation.php');

exit();
}
}
if(isset($errors)){
$_SESSION['erreur'] = $errors;
header('location: ./index_insc.php');

}
?>

