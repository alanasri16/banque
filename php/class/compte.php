
<?php
class compte {
	function compte (){}
	
	function afficher_compte(){
		
		$req="SELECT* FROM tb_compte";
		$txt=mysql_query($req);
		$id_compte=array();
		$numero=array();
		$solde=array();
		$type_compte=array();
		$i=0;
		
		while($data=mysql_fetch_object($txt)){
		
		$id_compte[$i]=$data->id_compte;
		$numero[$i]=$data->numero;
		$solde[$i]=$data->solde;
		$type_compte[$i]=$data->type_compte;
		$i++;
	}

return $liste=array($id_compte,$numero,$solde,$type_compte);	
}

function afficher_compte_id($id_client){
		
		$req="SELECT* FROM tb_compte where id_utilisateur='".$id_client."'";
		$txt=mysql_query($req);
		$id_compte=array();
		$numero=array();
		$solde=array();
		$type_compte=array();
		$i=0;
		
		while($data=mysql_fetch_object($txt)){
		
		$id_compte[$i]=$data->id_compte;
		$numero[$i]=$data->numero;
		$solde[$i]=$data->solde;
		$type_compte[$i]=$data->type_compte;
		$i++;
	}

return $liste=array($id_compte,$numero,$solde,$type_compte);	
}
function afficher_compte_idc($id){
		
		$req="SELECT* FROM tb_compte where id_compte='".$id."'";
		$txt=mysql_query($req);
		$id_compte=array();
		$numero=array();
		$solde=array();
		$type_compte=array();$iduser=array();
		$i=0;
		
		while($data=mysql_fetch_object($txt)){
		
		$id_compte[$i]=$data->id_compte;
		$numero[$i]=$data->numero;
		$solde[$i]=$data->solde;
		$type_compte[$i]=$data->type_compte;$iduser[$i]=$data->id_utilisateur;
		$i++;
	}

return $liste=array($id_compte,$numero,$solde,$type_compte,$iduser);	
}
 }
?>