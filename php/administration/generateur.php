<?php
Switch ($_GET["menu"])
	{
	/********************************Show****************************************/
					
		case "stat": include "inc/afficher/stat.php";
			
					break;
					
					
		case "liste_client": include "inc/afficher/liste_client.php"; break;
		
		case "liste_futurclient": include "inc/afficher/liste_futurclient.php";break;
		case "liste_candidats": include "inc/afficher/liste_candidat.php";break;
		case "emploi": include "inc/afficher/liste_offre_emploi.php";break;
		case "devises": include "inc/afficher/liste_devises.php";break;
		case "voircompte": include "inc/afficher/voircompte.php";break;
		case "extrait": include "inc/afficher/extrait.php";break;
		
		/********************************Add****************************************/
		case "ajout_offre": include "inc/ajouter/ajout_offre.php";break;
		/********************************Edit****************************************/
		case "edit_devises": include "inc/modifier/edit_devises.php";break;
		case "edit_offre": include "inc/modifier/edit_offre.php";break;
		case "edit_futurclient": include "inc/modifier/edit_futurclient.php";break;

		/********************************Default****************************************/			
		default: include "inc/afficher/stat.php";
	}
	?>