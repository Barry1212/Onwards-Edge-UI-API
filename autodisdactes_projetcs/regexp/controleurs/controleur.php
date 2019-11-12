<?php

$choix = isset($_GET['choix']) ? $_GET['choix'] : 'accueil';

switch ($choix) {
    case 'accueil' :
        include('vues/accueil.php');
        break;
    case 'formulaire_ajout_voiture' :
        include('vues/formulaire_ajout_voiture.php');
        break;
    case 'liste_voitures' :
        include('vues/liste_voitures.php');
        break;
}
        
