<?php
include("vues/v_sommaire.php");
include("vues/v_validerFrais.php");
$action = $_REQUEST['action'];
switch($action){
	case 'selectionnerVisiteur':{
		$lesVisiteurs=$pdo->getVisiteurs();
		// Afin de sélectionner par défaut le dernier mois dans la zone de liste
		// on demande toutes les clés, et on prend la première,
		// les mois étant triés décroissants
		include("vues/v_listeVisiteurs.php");
		break;
	}
}