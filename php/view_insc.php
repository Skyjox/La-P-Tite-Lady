<?php
include './include/header.php';
?>
<style>
    .allin,.allin2{
        display:flex;
        justify-content: center;
    }
    .allin{
        margin-top:5%;
     }
    .allin2{
        margin-bottom: 5%;
    }
    fieldset{
        width: 30%;
        justify-content: center;
        display:block;
    }
    legend{
        font-size: 1.5rem;
        text-align: center;
        justify-content: center;
    }
    #inscription{
        display: flex;
        flex-wrap: wrap;
    }
    #inscription label,input{
        width:100%;
    }
    label{
        text-align: center;
        margin: 1% 0;
    }
    input{
        width: 80%;
        margin-left:10%;
    }
    #connexion{
        display: flex;
        width: 100%;
        justify-content: center;
        margin: 2% 0;
    }
    #submit{
        width:100%;
        display: flex;
        justify-content: center;
        margin-top:1%;
    }
    .adresse{
        width: 100%;
    }
.adresse input{
    margin-top: 1%;
}


</style>
<div class="allin">
<fieldset>
    <legend>Bienvenue</legend>

    <form action="./inscription.php" method="POST" id="inscription">
        <label for="nom">Nom</label><br>
        <input type="text" name="nom" id="nom" required><br>

        <label for="prenom">Prenom</label><br>
        <input type="text" name="prenom" id="prenom" required><br>

        <label for="password">Mot de passe</label><br>
        <input type="password" name="password" id="mdp" required><br>

        <label for="compassword">Confirmer votre mot de passe</label><br>
        <input type="password" name="compassword" id="comp" required><br>

        <label for="mail">e-mail</label><br>
        <input type="email" name="mail" id="mail" required><br>

        <label for="confmail">Confirmer votre e-mail</label><br>
        <input type="mail" name="confmail" id="confmail" required><br>
        
        <label for="telephone">Téléphone</label>
        <input type="tel" name="telephone" id="telephone">

        <label for="adresse">Votre Adresse</label>
        <div class="adresse">
        <input type="number" name="adresse" id="numero" value="01" onFocus="this.value='';">

        </div>

        
        <div id="submit">
        <button type="submit">Inscription</button>
        </div>

    </form>
</fieldset><br><br>
</div>
<div class="allin2">
<fieldset >
    <legend>Déjà inscrit ? </legend>
    <div id="connexion">
        <a href="./view_login.php">Connexion</a>
    </div>
</fieldset>
</div>



<?php
include './include/footer.php';
?>
