<?php
//supression_valeur.php

// require pour connecter suppression_valeur.php à creation_table.php pour acceder aux fonctions connexion_bdd 
// et close_connexion($db) anisi qu'à la variable $db
require_once "creation_table.php";

//fonction pour supprimer manuellement une ligne de la base de données via l'id
function supp($id) {
    //utilisation de la fonction connexion et definition de $db
    $db = connexion_bdd();
    //$id->valeur de l'id de la ligne à supprimer
    //$id=17;
    $query = "DELETE FROM contact WHERE id = :id";
    $stmt = $db->prepare($query);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    //message de confirmation
    echo "donnée supprimée<br>";
    //utilisation de la fonction de fermeture de connexion à la bdd
    close_connexion($db);
}
?>