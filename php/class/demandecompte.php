<?php
class demandecompte{
	/** constructeur vide **/
	function demandecompte(){}
	/****ajout****/
	function ajout_demandecompte( $cin, $nom,$prenom, $date_naiss,$sexe,$tel, $ville,$identifiant,$login,$type_compte,$email ){
		/*** instruction 1 ondeclare la requete ***/
		$req="INSERT INTO `tb_demandecompte` VALUES ('','
		                                         ".$cin."',
		                                         '".$nom."', 
		                                         '".$prenom."',  
		                                         ' ".$date_naiss."',
		                                         '".$sexe."', 
		                                         '".$tel."', 
		                                         '".$ville."', 
		                                         '".$identifiant."', 
		                                         '".$login."', 
		                                         '".$type_compte."','".$email."' 
		                                        
                                                 )";
		/*** instruction 2 on execute la requete ***/										 
		( mysql_query($req)) ? $resultat=1 : NULL ;
		/*** instruction 3 on renvoi le resultat ***/
		return $resultat;

	}
	/****modifier***/
	function modifier_demandecompte($id_demande, $cin, $nom,$prenom, $date_naiss,$sexe,$tel,$ville,$identifiant,$login,$type_compte,$email){
	$update_demandecompte="UPDATE  `tb_demandecompte` SET  `cin` = '".$cin."',
	                                                      `nom` = '".$nom."', 
	                                                      `prénom` = '".$prenom."',
                                                           `date_naiss` = '".$date_naiss."',
                                                           `sexe` = '".$sexe."',
                                                           `tel` = '".$tel."',
                                                           `ville` = '".$ville."',
                                                           `identifiant` = '".$identifiant."',
                                                           `login` = '".$login."',
                                                           `type_compte` = '".$type_compte."',`email` = '".$email."'
														   
                                                           WHERE `id_demande` = '".$id_demande."'
                                                     
														";
														
        ( mysql_query($update_demandecompte)) ? $resultat=1 : NULL ;
        return $resultat;

		

}
  /*** afficher liste des demandes des comptes***/
  
    
	 function afficher_demandecompte(){	 
	      //requete
	     $aff_demandecompte="SELECT* FROM tb_demandecompte";
	     //execution
	     $txt=mysql_query($aff_demandecompte);
	      // nombre de ligne

	     $id_demande=array();
	     $cin=array();
	     $nom=array();
	     $prenom=array();
		 $date_naiss=array();
	    
	     $sexe=array();
	     $tel=array();
	     $ville=array();
	     $identifiant=array();
	     $login=array();
	     $type_compte=array();
	     $email=array();
	     
	     $i=0;
	while($data=mysql_fetch_object($txt)){
		 $id_demande[$i]=$data->id_demande;
	    
	     $cin[$i]=$data->cin;
	     $nom[$i]=$data->nom;
	     $prénom[$i]=$data->prenom;
		 $date_naiss[$i]=$data->date_naiss;
		  $sexe[$i]=$data->sexe;
	     $tel[$i]=$data->tel;
	     $ville[$i]=$data->ville;
		 $identifiant[$i]=$data->identifiant;
		 $login[$i]=$data->login;
		 $type_compte[$i]=$data->type_compte;
		 $email[$i]=$data->email;
	     
	     $i++;
	}
	return $liste_demandecompte=array($id_demande,$cin, $nom, $prénom, $date_naiss, $sexe, $tel ,$ville,$identifiant,$login,$type_compte,$email);
	 }
	 	 function afficher_demandecompte_id($id_demande){	 
	      //requete
	     $aff_demandecompte="SELECT* FROM tb_demandecompte";
	     //execution
	     $txt=mysql_query($aff_demandecompte);
	      // nombre de ligne
	     $somme=mysql_num_rows($txt);
	     $id_demande=array();
	     $cin=array();
	     $nom=array();
	     $prenom=array();
		 $date_naiss=array();
	    
	     $sexe=array();
	     $tel=array();
	     $ville=array();
	     $identifiant=array();
	     $login=array();
	     $type_compte=array();
	     $email=array();
	     $i=0;
	while($data=mysql_fetch_object($txt)){
		 $id_demande[$i]=$data->id_demande;
	    
	     $cin[$i]=$data->cin;
	     $nom[$i]=$data->nom;
	     $prenom[$i]=$data->prenom;
		 $date_naiss[$i]=$data->date_naiss;
		  $sexe[$i]=$data->sexe;
	     $tel[$i]=$data->tel;
	     $ville[$i]=$data->ville;
		 $identifiant[$i]=$data->identifiant;
		 $login[$i]=$data->login;
		 $type_compte[$i]=$data->type_compte;
	     $email[$i]=$data->email;
	     $i++;
	}
	return $liste_demandecompte=array($id_demande,$cin, $nom, $prenom, $date_naiss, $sexe, $tel ,$ville,$identifiant,$login,$type_compte,$email);
	 }
	 	/*** Suppression selon ID **/
	function supprimer_demandecompte($id_demande){
		$supdemande = "delete from tb_demandecompte where id_demande='".$id_demande."' ";
		(mysql_query($supdemande)) ? $retour_sup=1 : NULL ;	
		return $retour_sup;		
	}
	
	
}


?>