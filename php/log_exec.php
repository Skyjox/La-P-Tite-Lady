
<?php
require './connection.php';//requiert la connection au fichier connexion.php
if(isset($_POST["submit"])) if(empty($_POST['nom']) || empty($_POST['password'])){//si le formulaire qui porte le name "nom" est vie OU si le formu name "password" alors renvois echo
    echo 'remplissage absent';
}

else{// sinon on fait

    $query ="SELECT * FROM user WHERE nom = :nom LIMIT 1"; // déclaration variable $query avec du MySQL
    $statement = $pdo->prepare($query);//pdo = PHP Data Object
    // déclaration de la variable $statement

    $statement->execute(

        array(
            'nom'=>$_POST['nom']   // → associe le nom de la base de donnée avec celui mis dans le formulaire le tout dans un tableau (array)
        )
    );

    $count = $statement->rowCount();
    if($count > 0){
        $result = $statement->fetch(PDO::FETCH_ASSOC);//  PDO::FETCH_ASSOC => methode de fetch pour retourner un tableau
        if(password_verify($_POST['password'], $result['password'])){
            session_start();
            $_SESSION['nom'] = $_POST['nom'];
            $_SESSION['user_kind'] = $result['user_kind'];
            exit(header('location: ./view_member.php'));


        }else{
            echo 'Nom d\'utilisateur où mot de passe incorrect';
            header('location: ./view_login.php'  );
        }
    }else{
        echo 'Informations manquantes';
    }
}
?>

