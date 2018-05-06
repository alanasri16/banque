<?php session_start();

include '../cnx_bd.php';
//get the posted values
$ident=htmlspecialchars($_POST['login'],ENT_QUOTES);  /*identifiant */
$pass=$_POST['password'];                           /*mdp */

//now validating the login and password
$sql="SELECT * FROM  tb_utilisateur WHERE identifiant='".$ident."'and id_profil=3";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

//if username exists
if(mysql_num_rows($result)>0)
{
	//compare the password
	if(strcmp($row['login'],$pass)==0)
	{			//now set the session from here if needed

		                     $_SESSION['identifiant']=$ident;; 
							 $_SESSION['id']=$row['id_utilisateur'];
							
							echo "administration/index.php";
						
					 		
		
		
	}
	else
		echo "no"; //Invalid pass
}
else
	echo "no"; //Invalid identifiant


?>