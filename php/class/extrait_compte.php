<?php
class extrait_compte{
function extrait_compte(){}

function afficher_extrait_id($id_compte){	 
	      //requete
	     $req="SELECT* FROM tb_mouvement where id_compte='".$id_compte."'";
	     //execution
	     $txt=mysql_query($req);
	      // nombre de ligne
	     $id_mouvement=array();
	     $type_transaction=array();
	     $date_transaction=array();
		 $montant=array();
	    
	     $i=0;
		 
	    while($data=mysql_fetch_object($txt)){
		 $id_mouvement[$i]=$data->id_mouvement;
	     $type_transaction[$i]=$data->type_transaction;
	     $date_transaction[$i]=$data->date_transaction;
		 $montant[$i]=$data->montant;
		 
	     $i++;
	}
	return $extrait=array($id_mouvement,$type_transaction, $date_transaction,$montant);
	 }
}
	
	 ?>