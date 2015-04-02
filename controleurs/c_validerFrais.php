<?php
include("vues/v_sommaire.php");
$idVisiteur = $_SESSION['idVisiteur'];
$action = $_REQUEST['action'];
switch($action){
	case 'selectionnerVisiteur':{
		$lesVisiteurs=$pdo->getVisiteurs();
                $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
                include("vues/v_listeVisiteurs.php");
		break;
	}
        case 'valFrais':{
            $leVisiteur = $_REQUEST['lstVisiteur'];
            $leMois = $_REQUEST['lstMois'];
            $lesVisiteurs=$pdo->getVisiteurs();
            $lesMois=$pdo->getLesMoisDisponibles($idVisiteur);
            $lesFraisHorsForfait = $pdo->getLesFraisHorsForfait($idVisiteur,$leMois);
            
            include("vues/v_listeVisiteurs.php");
            
        }
}

include("vues/v_validerFrais.php");