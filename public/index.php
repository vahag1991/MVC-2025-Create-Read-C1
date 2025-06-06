<?php
# public/index.php

/*
 * Contrôleur frontal
 */

session_start();

// configuration
require_once "../config-dev.php";

// notre connexion PDO
try{
    // instanciation de PDO
    $db = new PDO(DB_DSN,DB_LOGIN,DB_PWD,
    [
        // affichage des erreurs
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        // attribue les valeurs du fetch par défaut en tableau associatif
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);


}catch(Exception $e){
    die($e->getMessage());
}

// Chargement de notre routeur
require_once "../controller/RouterController.php";


// Débogage
echo '<h4>session_id() ou SID</h4>';
var_dump(session_id());
echo '<h4>$_GET</h4>';
var_dump($_GET);
echo '<h4>$_SESSION</h4>';
var_dump($_SESSION);
echo '<h3>$_POST</h3>';
var_dump($_POST);


// bonne pratique
$db=null;