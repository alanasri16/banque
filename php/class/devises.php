<?php
class devises{
function devises(){}
	
function afficher_devises(){
 $req="SELECT* FROM tb_devises";
	     
	     $txt=mysql_query($req);
	     $id_devise=array();
	     $nom=array();
	     $prix_achat=array();
	     $prix_vente=array();
		 $pays=array();
	     $i=0;
	    while($data=mysql_fetch_object($txt)){
		 $id_devise[$i]=$data->id_devise;
	     $nom[$i]=$data->nom;
	     $prix_achat[$i]=$data->prix_achat;
	     $prix_vente[$i]=$data->prix_vente;
		 $pays[$i]=$data->pays;
	    
	     $i++;
	}
	return $liste_devises=array($id_devise, $nom, $prix_achat, $prix_vente, $pays);
	 }
	 
function modifier_devises($id_devise, $nom,$prix_achat, $prix_vente,$pays){
	$req="UPDATE  `tb_devises` SET
	                                                      `nom` = '".$nom."', 
	                                                      `prix_achat` = '".$prix_achat."',
                                                           `prix_vente` = '".$prix_vente."',
                                                           `pays` = '".$pays."'
                                                           WHERE `id_devise` = '".$id_devise."'
                                                     
														";
														
        ( mysql_query($req)) ? $result=1 : NULL ;
        return $result;
}

function afficher_devise($id_devise){
 $req="SELECT* FROM tb_devises where id_devise like'".$id_devise."'"; 
	     
	     $txt=mysql_query($req);
	     $id_devise=array();
	     $nom=array();
	     $prix_achat=array();
	     $prix_vente=array();
		 $pays=array();
	     $i=0;
	    while($data=mysql_fetch_object($txt)){
		 $id_devise[$i]=$data->id_devise;
	     $nom[$i]=$data->nom;
	     $prix_achat[$i]=$data->prix_achat;
	     $prix_vente[$i]=$data->prix_vente;
		 $pays[$i]=$data->pays;
	    
	     $i++;
	}
	return $liste_devises=array($id_devise, $nom, $prix_achat, $prix_vente, $pays);
	 }

 
}		
?>