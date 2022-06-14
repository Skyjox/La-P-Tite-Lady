<?php
include './include/header.php';
?>
<div class="allog">
<fieldset>
    <legend>Insertion</legend>
    <form action="./insertdb_exe.php" method="POST">

        <label for="classe">Classe</label>
        <input type="text" name="classe" id="classe" required>

        <label for="taille">Taille</label>
        <input type="number" name="taille" id="taille" required>

        <label for="prix">Prix</label>
        <input type="number" name="prix" id="prix" required>

        <div id="submit">
            <button type="submit">Ajouter l'article</button>
        </div>
    </form>
</fieldset>
</div>
<?php
include './include/footer.php';
?>
