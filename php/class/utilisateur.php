<?php
class utilisateur{
	/** constructeur vide **/
	function utilisateur(){}
	/****ajout****/
	
	/****modifier***/
	function modifier_futurclient($id_utilisateur, $cin, $nom,$prenom, $date_naiss,$sexe,$tel, $ville,$identifiant,$login,$type_compte,$email){
	$req="UPDATE  `tb_utilisateur` SET  `cin` = '".$cin."',
	                                                      `nom` = '".$nom."', 
	                                                      `prenom` = '".$prenom."',
                                                           `date_naiss` = '".$date_naiss."',
                                                           `sexe` = '".$sexe."',
                                                           `tel` = '".$tel."',
                                                           `ville` = '".$ville."',
                                                           `identifiant` = '".$identifiant."',
                                                           `login` = '".$login."',
                                                           `type_compte` = '".$type_compte."',
                                                           `email` ='".$email."'
                                                           WHERE `id_utilisateur` = '".$id_utilisateur."'
                                                     
														";
														
        ( mysql_query($req)) ? $mod=1 : NULL ;
          return $mod;

		

}
  /*** afficher liste des utilisateur***/
  function validation_client($id_utilisateur){
	
	$req="UPDATE  `tb_utilisateur` SET  vc ='1' WHERE `id_utilisateur` = '".$id_utilisateur."'";
	$req2="SELECT * FROM tb_utilisateur where id_utilisateur= '".$id_utilisateur."'";
	$txt=mysql_query($req2);
	$row=mysql_fetch_array($txt);
	$num=rand(1000,100000).'000';
	$req3="INSERT INTO tb_compte values ('','".$num."','0','".$row['type_compte']."','".$id_utilisateur."')";
	(mysql_query($req3)) ? $mod2=1 : NULL ;
        (mysql_query($req)) ? $mod=1 : NULL ;
          return $mod;
}
  
    
	 function afficher_futurclient(){	 
	      //requete
	     $req="SELECT* FROM tb_utilisateur where id_profil =1 and vc=0";
	     //execution
	     $txt=mysql_query($req);
	      // nombre de ligne
	     $id_utilisateur=array();
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
		 $id_utilisateur[$i]=$data->id_utilisateur;
	    
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
	return $liste_futurclient=array($id_utilisateur,$cin, $nom, $prenom, $date_naiss, $sexe, $tel ,$ville,$identifiant,$login,$type_compte,$email);
	 }
	 
	  
	 function afficher_client(){	 
	      //requete
	     $req="SELECT* FROM tb_utilisateur where id_profil=1 and vc=1";
	     //execution
	     $txt=mysql_query($req);
	      // nombre de ligne
	     $id_utilisateur=array();
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
	     $id_profil=array();
	     $email=array();
	     
	     $i=0;
	    while($data=mysql_fetch_object($txt)){
		 $id_utilisateur[$i]=$data->id_utilisateur;
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
	return $liste_client=array($id_utilisateur,$cin, $nom, $prenom, $date_naiss, $sexe, $tel ,$ville,$identifiant,$login,$type_compte,$email);
	 }
	  
	 function afficher_candidat(){	 
	      //requete
	     $req="SELECT* FROM tb_utilisateur where id_profil=2";
	     //execution
	     $txt=mysql_query($req);
	      // nombre de ligne
	     $id_utilisateur=array();
	     $cin=array();
	     $nom=array();
	     $prenom=array();
		 $date_naiss=array();
	    
	     $sexe=array();
	     $tel=array();
	     $ville=array();
	     $email=array();
	     $ref_poste=array();     
	     $etudes=array();     
	     $niveau=array();     
	     $i=0;
	    while($data=mysql_fetch_object($txt)){
		 $id_utilisateur[$i]=$data->id_utilisateur;
	    
	     $cin[$i]=$data->cin;
	     $nom[$i]=$data->nom;
	     $prenom[$i]=$data->prenom;
		 $date_naiss[$i]=$data->date_naiss;
		  $sexe[$i]=$data->sexe;
	     $tel[$i]=$data->tel;
	     $ville[$i]=$data->ville;
		 $email[$i]=$data->email;
		 $ref_poste[$i]=$data->ref_poste;
		 $etudes[$i]=$data->etudes;
		 $niveau[$i]=$data->niveau;
		
	     $i++;
	}
	return $candidat=array($id_utilisateur,$cin, $nom, $prenom, $date_naiss, $sexe, $tel ,$ville,$email,$ref_poste,$etudes,$niveau);
	 }
	 	/*** Suppression selon ID **/
	function supprimer_futurclient($id_utilisateur){
		$req = "delete from tb_utilisateur where id_utilisateur='".$id_utilisateur."' and id_profil=1 and vc=0";
		(mysql_query($req)) ? $retour_sup=1 : NULL ;	
		return $retour_sup;		
	}
	 
	 function supprimer_candidat($id_utilisateur){
		$req = "delete from tb_utilisateur where id_utilisateur='".$id_utilisateur."' and id_profil=2";
		(mysql_query($req)) ? $retour_sup=1 : NULL ;	
		return $retour_sup;		
	}
	
	 function afficher_futur_client($id_utilisateur){	 
	      //requete
	     $req="SELECT* FROM tb_utilisateur where id_utilisateur='".$id_utilisateur."'";
	     //execution
	     $txt=mysql_query($req);
	      // nombre de ligne
	     $id_utilisateur=array();
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
		 $id_utilisateur[$i]=$data->id_utilisateur;
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
	return $liste_futurclient=array($id_utilisateur,$cin, $nom, $prenom, $date_naiss, $sexe, $tel ,$ville,$identifiant,$login,$type_compte,$email);
	 }

}

	



?>