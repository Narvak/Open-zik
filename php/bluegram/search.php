<?php
// Initialiser la session
session_start();
// Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
if(!isset($_SESSION["username"])){
    header("Location: login.php");
        exit(); 
}

/*
Variable
*/
$searchread = (int)readline('Votre recherche : ');
$recomendation = null;
$sessionstart = session_start();

/*
    search
*/
if ($searchread > 0) {
    echo (int)readline('Votre recherche : ');
}

/*
    recomendation
*/
if ($recomendation > 10) {
    while ($recomendation > 10) {
        echo "Les recomendations.";
    }
} else {
    echo "Pas de recomendation pour le moment.";
}









/*
    boucle d'initialision la session.
*/
while ($sessionstart > 0) {
    // Initialiser la session
    session_start();
    // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
            exit(); 
    }
}

?>