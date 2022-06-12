<?php
   function valid_donnees($donnees){//cette fonction sert à sécuriser les formulaires
       $donnees= trim($donnees);//trim — Supprime les espaces (ou d'autres caractères) en début et fin de chaîne
       $donnees=htmlspecialchars($donnees);//Permet de transformer tout le code html en simple string
       $donnees=stripcslashes($donnees);//Retourne la chaîne str après avoir supprimé tous les antislashs. stripcslashes() respecte les séquences spéciales du C, telles que \n, \r..., les nombres octaux et hexadécimaux.
       return $donnees;
   }
?>
