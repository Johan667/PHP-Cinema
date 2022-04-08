<?php

function chargerClasse($classe)
{
    require $classe.'.php';
}
spl_autoload_register('chargerClasse');
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>CINEMA</title>
</head>

<body>

    <p>
            Vous avez en charge de gérer différentes entités autour de la thématique du cinéma. <br>
            Les films seront identifiés par leur titre, leur date de sortie en France, leur durée (en minutes) ainsi que
            leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film (synopsis)
            pourra éventuellement être renseigné. Chaque film est caractérisé par un seul genre
            cinématographique (science-fiction, aventure, action, ...). <br>
            Votre application devra recenser également les acteurs de chacun des films. On désire connaître le
            nom, le prénom, le sexe et la date de naissance de l’acteur ainsi que le rôle (nom du personnage) joué
            par l’acteur dans le(s) film(s) concerné(s). <br>
            Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de savoir où
            le mettre en place !
        </p>

        <h4><b>Attention!</b></h4>

        <ul>
            <li>
                Le rôle (par exemple "James Bond") ne doit être instancié qu'une seule fois (dans la mesure où
                e rôle a été incarné par plusieurs acteurs)
            </li>
        </ul>
        <p>On doit pouvoir</p>

        <ul>
            <li>Lister la liste des acteurs ayant incarné tel rôle</li>
            <li>Lister le casting d'un film (Dans Star Wars, Han Solo a été incarné par Harison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)</li>
            <li>Lister les films par genre (exemple : dans le genre SF il y a X films : Star Wars, Blade Runner, ...)</li>
            <li>Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)</li>
            <li>Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</li>
        </ul>

        <h2>SOLUTION DES EXERCICES:</h2>
</body>

<?php
// Réalisateur
$Sanders = new Realisateur('Rupert', 'Sanders', 'Homme', '1971-03-16');

// Acteur
$Johansson = new Acteur('Johansson', 'Scarlett', 'Femme', '12-12-2012');
$Pikachu = new Acteur('Pomme', 'Pikachu', 'Homme', '18-12-2006');
$Pauline = new Acteur('Duchemin', 'Pauline', 'Femme', '24-06-1966');
$ChangMao = new Acteur('LeChat', 'ChangMao', 'Homme', '12-06-1266');

// Role
$HP = new Role('héro principal');
$GT = new Role('Gentil');
$MC = new Role('Mechant');
$BG = new Role('Beaugosse');

// Genre + Affichage
$sciencefiction = new Genre('Science-fiction');
$aventure = new Genre('Aventure');
$comedie = new Genre('Comedie');
//echo $sciencefiction;
//echo $aventure;

// Film Ghost in HELL + Affichage
$GIS = new Film('Ghost In The Shell', 107, '2017-03-29', $Sanders, 'Lorem Ispum', $sciencefiction);
//$GIS->voirfilm();

// Film Blanche Neige + Affichage
$BN = new Film('Blanche Neige et Le chasseur', 127, '2012-06-11', $Sanders, 'Lorem Ipsulm', $aventure);
//$BN->voirfilm();

// Film MUTE  + Affichage
$MUTE = new Film('Mute', 126, '2018-02-23', $Sanders, 'Lorem Ipsulm', $comedie);
//$MUTE->voirfilm();

// Affichage Réalisations
$Sanders->afficherRealisations();

// Listing des Genre
$sciencefiction->afficherGenres();
$aventure->afficherGenres();

// Creer un casting
$c1 = new Casting($HP, $Johansson, $GIS);
$c2 = new Casting($BG, $ChangMao, $MUTE);
$c3 = new Casting($BN, $Pauline, $GT);

// Afficher Casting
$GIS->afficherCastings();    // Par film
$ChangMao->afficherCastings(); // Par acteur
$GT->afficherCastings(); // Par role
