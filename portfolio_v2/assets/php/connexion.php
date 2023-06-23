<?php
//connexion.php
//définition des constantes
define("USER_BDD", "root");
define("NAME_BDD", "portfolio_bdd");
define("HOST_BDD", "localhost");
define("MDP_BDD", "");
define("NAME_BDD_PRINCIPAL", "mysql");
define("NAME_TABLE", "contact");

//connexion première
function connexion_bdd_mysql(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=mysql;charset=utf8','root','');
        echo "connexion réussie à la base de données mysql<br>"; 
    }
    catch (Exception $e) {
       'Erreur : ' . $e->getMessage();
    } 
    return $db;
    close_connexion($db);
};
//connexion à la base de données portfolio_bdd
function connexion_bdd(){
    try {
        $db = new PDO('mysql:host=localhost;dbname=portfolio_bdd;charset=utf8','root','');
        echo "connexion réussie à la base de données<br>"; 
    }
    catch (Exception $e) {
       'Erreur : ' . $e->getMessage();
    } 
    return $db;
};
//fermeture de la connexion à la bdd
function close_connexion($db){
    
    $db = null;
     
}



?>
