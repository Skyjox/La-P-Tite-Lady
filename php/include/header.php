<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--Début link css-->
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Fin link css -->
    <!--Début polices -->
    <!--Fin polices -->
    <!--Début icons -->
    <script src="https://kit.fontawesome.com/895427049f.js" crossorigin="anonymous"></script>
    <!--Fin icons-->
    <!--Début script JS-->
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <script src="./js/index.js" async></script>
    <script src="../js/index.js" async></script>
    <!--Fin script JS-->
    <title>La P'tite Lady</title>
</head>
<body>
<div class="livraison">
    <h4>Livraison offerte à partir de 90€</h4>
</div>
    <div id="allheader">

    <div id="photo">
        <img src="../asset/img/header.jpg" alt="boutique" id="boutique">
    </div>
    <div id="boxheader">
        <h1>La P tite Lady</h1>
    </div>
        <div id="allico">
            <ul id="icones">
                <li><a href="./home.php"><i class="fa-solid fa-house"></i></a></li>
             <div id="deco">
                <li><a href="./view_login.php"><i class="fa-solid fa-user " @mouseover=" connect = true" @mouseleave="connect = false"></i></a></li>
                 <p id="disconnect" v-show="connect">Connexion</p>
             </div>

                <li><a href="#"><i class="fa-solid fa-bag-shopping "></i></a></li>
            </ul>
        </div>
        <hr>
    <div id="navbar">
        <ul id="nav">
            <li>Catalogue</li>
            <li>Vétements</li><!-- faire le menu déroulant en js -->
            <li>Bijoux</li><!-- faire le menu déroulant en js -->
            <li>Accessoires</li><!-- faire le menu déroulant en js -->
            <li>Maroquinerie</li><!-- faire le menu déroulant en js -->
            <li>Chaussures</li>
        </ul>
    </div>
</div>

