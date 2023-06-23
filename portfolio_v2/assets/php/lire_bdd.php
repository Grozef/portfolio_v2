<?php
//lire_bdd.php

// require pour connecter lire_bdd.php à creation_table.php pour acceder aux fonctions connexion_bdd 
// et close_connexion($db) anisi qu'à la variable $db
require_once "connexion.php";

//fonction permettant d'afficher les données de la table contact
function lire(){

    //utilisation de la fonction connexion à la bdd
    $db = connexion_bdd();
    $sql = "SELECT * FROM contact";
    $stmt = $db->prepare($sql);
    $stmt ->execute();
    $results = $stmt->fetchAll();
    //utilisation de la fonction de fermeture de connexion à la bdd
    close_connexion($db);
    //le return permet de consulter les données en dehors de la fonction
    return $results;
}

?>