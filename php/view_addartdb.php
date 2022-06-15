<?php
include './include/header_connect.php';
?>
<div class="allog">
<fieldset>
    <legend>Nouvel Article</legend>
    <form action="./insertdb_exe.php" method="POST">

        <label for="classe">Classe</label>
        <input type="text" name="classe" id="classe" required>

        <label for="taille">Taille</label>
        <input type="text" name="taille" id="taille" required>

        <label for="prix">Prix</label>
        <input type="number" name="prix" id="prix" required>

        <div id="submit">
            <button type="submit">Ajouter l'article</button>

        </div>
    </form>
    <div class="back">
        <a href="./view_admin.php"><button>Retour</button></a>
    </div>
</fieldset>
</div>


<?php
include './include/footer.php';
?>
