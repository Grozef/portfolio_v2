<?php
//index.php

//requires pour acceder aux fonctions de création de bdd, de table et aux fonctions d'insertion de données
require_once "creation_bdd.php";
require_once "creation_table.php";
require "insert.php";
require "supression_valeur.php";
require "lire_bdd.php";

//appel de la fonction creation de bdd
creation_bdd();

//appel de la fonction de création de table
creation_table();

//appel de la fonction d'insertion de données via le formulaire de contact
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    inser();
    //message de confirmation
    echo"données insérées<br>";
}

//appel de la fonction pour supprimer une ligne de la bdd
//modifier la valeur de $id dans la fonction supp() dans supression_valeur.php, 
//ne pas oublier de décommenter $id dans la fonction
supp($id);

// Appel de la fonction lire() pour obtenir les données
$data = lire();

// Vérification si des résultats ont été retournés
if ($data) {
    // Parcourir les résultats et afficher les données
    foreach ($data as $row) {
        echo "Nom : " . $row['nom'] . "<br>";
        echo "Email : " . $row['mail'] . "<br>";
        echo "Description : " . $row['descript'] . "<br>";
        echo "<br>";
    }
} else {
    echo "Aucune donnée trouvée.<br>";
}


//ne pas oublier de modifier les fichiers php pour integrer les constantes
?>