<?php
// require pour connecter creation_table.php à connexion.php pour acceder aux fonctions connexion_bdd 
//et close_connexion($db) anisi qu'à la variable $db
require_once "connexion.php";

//fonction pour créer la table
function creation_table(){
    try{
        //utilisation de la fonction de fermeture de connexion à la base de données
        $db = connexion_bdd();
        
        $tablePers = "CREATE TABLE IF NOT EXISTS contact (
            id INT NOT NULL AUTO_INCREMENT,
            nom VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL,
            descript TEXT NOT NULL,
            PRIMARY KEY (id)       
        )";
        $stmt = $db->prepare($tablePers);
        $stmt->execute();
        //message de confirmation   
        echo "Table pers créée ou déjà existante<br>";
        }
catch (Exception $e)
        {
            'Erreur : ' . $e->getMessage();        
        }
finally{
        //utilisation de la fonction de fermeture de connexion à la base de données
        close_connexion($db);
        }       
}
?>