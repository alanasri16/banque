<?php
class candidat {
	function candidat (){}
	
	function afficher_candidat(){
		
		$req="SELECT* FROM tb_candidat";
		$txt=mysql_query($req);
		$id_candidat=array();
		$etudes=array();
		$stages=array();
		
		$i=0;
		
		while($data=mysql_fetch_object($txt)){
		
		$id_candidat[$i]=$data->id_candidat;
		$etudes[$i]=$data->etudes;
		$stages[$i]=$data->stages;
		$i++;
	}

return $liste=array($id_candidat,$etudes,$stages);	
}



function supprimer_candidat($id_candidat){
	
	$sup = "delete from tb_candidat where id_candidat='".$id_candidat."' ";
		(mysql_query($sup)) ? $retour_sup=1 : NULL ;	
		return $retour_sup;	
	
}
 }
?>