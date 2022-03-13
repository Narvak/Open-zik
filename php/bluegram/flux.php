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
$bluegram = "Bluegram";
$commentaireread = (int)readline('Votre commantaire : ');
$likes = 'Likes';
$points = '10pt';
$detail = (int)readline('Detail : ');
$publication = null;
$hashtags = null;

/*
    Général
*/
echo $bluegram;

    /*
        Likes (voir le fichier algorithme pour plus de détail).
    */
if ($likes = 1 && $points +1) {
    echo '($likes +1 && $points)';
} else {
    echo "Pas de likes pour le moment.";
}

    /*
        Commentaires
    */
if ($commentaireread <= 200) {
    echo $commentaireread;
} else {
    echo "Votre commentaire n'est pas valide. Il est superrieur à 200 caractéres.";
}

    /*
        Desciption
    */
if ($detail > 0) {

} else {
    echo "Déso ou pas déso il n'y à point de description.";
}

if ($hashtags > 0) {
    (int)readline('Hashtag : ');
} elseif ($hashtags === 0) {
    echo "Il n'y à pas de hashtags les gens.";
} else {
    echo "Les hashtags n'existe pas sur cette publication.";
}

    /*
        boucle while (commentaires)
    */
while ($commentaireread !== 200) {
    (int)readline('Votre commantaire : ');
}
if ($commentaireread === 200) {
    echo "Il y a trop de caractaires.";
} else {
    echo "votre commentaire est en ligne.";
}

while ($commentaireread < 200) {
    (int)readline('Votre commantaire : ');
}
if ($commentaireread > 200) {
    echo "Il y a trop de caractaires.";
} else {
    echo "votre commentaire est en ligne.";
}














/*
    boucle d'initialision la session.
*/
while ($sessionstart >= 0) {
    // Initialiser la session
    session_start();
    // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
    if(!isset($_SESSION["username"])){
        header("Location: login.php");
            exit(); 
    }
}

?>