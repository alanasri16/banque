<?php
class emploi {
	function emploi (){}
	
	function afficher_emploi(){
		
		$req="SELECT* FROM tb_emploi";
		$txt=mysql_query($req);
		$id_offre=array();
		$poste=array();
		$niveau=array();
		$ville=array();
		$i=0;
		
		while($data=mysql_fetch_object($txt)){
		
		$id_offre[$i]=$data->id_offre;
		$poste[$i]=$data->poste;
		$niveau[$i]=$data->niveau;
		$ville[$i]=$data->ville;
		$i++;
	}

return $liste=array($id_offre,$poste,$niveau,$ville);	
}

function afficher_emplois($id_offre){
		
		$req="SELECT* FROM tb_emploi where id_offre like'".$id_offre."'"; 
		$txt=mysql_query($req);
		$id_offre=array();
		$poste=array();
		$niveau=array();
		$ville=array();
		$i=0;
		
		while($data=mysql_fetch_object($txt)){
		
		$id_offre[$i]=$data->id_offre;
		$poste[$i]=$data->poste;
		$niveau[$i]=$data->niveau;
		$ville[$i]=$data->ville;
		$i++;
	}

return $liste=array($id_offre,$poste,$niveau,$ville);	
}


function modifier_emploi($id_offre,$poste,$niveau,$ville){
	$req="UPDATE  `tb_emploi` SET  
	                                                      `poste` = '".$poste."',
                                                           `niveau` = '".$niveau."',
                                                           `ville` = '".$ville."'
                                                           WHERE `id_offre` = '".$id_offre."'
                                                     
														";
														
        (mysql_query($req)) ? $result=1 : NULL ;
        return $result;
}


function supprimer_emploi($id_offre){
		$supuser = "delete from tb_emploi where id_offre='".$id_offre."' ";
		(mysql_query($supuser)) ? $retour_sup=1 : NULL ;	
		return $retour_sup;		
	}
	
	
		function ajout_emploi($poste,$niveau,$ville){
		$req="INSERT INTO `tb_emploi` VALUES ('','".$poste."', 
		                                         '".$niveau."',
		                                         '".$ville."','','' )";
												 
		(mysql_query($req)) ? $resultat=1 : NULL ;
		
		return $resultat;

	}
 }
?>