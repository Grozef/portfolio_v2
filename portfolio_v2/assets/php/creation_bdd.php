<?php
//creation_bd.php

//require pour connecter creation_bdd.php a connexion.php
require "connexion.php";

//fonction pour créer la Base De Données
function creation_bdd(){
    try
    { 
    //utilisation de la fonction pour initialiser la connexion à la bdd
    $db = connexion_bdd_mysql();
    $sql = "CREATE DATABASE IF NOT EXISTS portfolio_bdd";
    $stmt= $db->prepare($sql);
    $stmt->execute();
    //message de confirmation
    echo "creation bdd ok ou bdd déja existante</p> ";

    }
    catch (Exception $e)
    {
        'Erreur : ' . $e->getMessage();
    }
    finally{
        //utilisation de la fonction pour fermer la connexion à la bdd
        close_connexion($db);
    }

       
}



?>