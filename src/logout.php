<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
// Réinitialiser toutes les variables de session
$_SESSION = array();  

// Détruire la session
session_destroy();     

// Redirection vers la page d'accueil après la déconnexion
header('Location: ./');
exit;

