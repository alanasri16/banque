 <?php
 include("../../cnx_bd.php");
 include("../../class/utilisateur.php");
 $utilisateur=new utilisateur();
 include("../../class/compte.php");
 $compte=new compte();
 include("../../class/extrait_compte.php");
 $extrait=new extrait_compte();
 
 
 
$liste=$extrait->afficher_extrait_id($_GET['id']);
$lcompte=$compte->afficher_compte_idc($_GET["id"]);

 ?>
<html> 
<body onload="window.print()"> 

<table width="100%">
                                            <thead>
                                            <tr>
                                                <th>Num de compte</th>
                                                <th>Solde</th>
                                                <th>Type de compte</th>
                                                <th>Nom de client</th>
                                                
												
                                            </tr>
                                            </thead>
                                            <tbody>
											
                                            <tr class="odd gradeX">
                                                <td> <?php echo $lcompte[1][0];?></td>
                                                <td> <?php echo $lcompte[2][0];?></td>
                                                <td> <?php echo $lcompte[3][0];?></td>
                                                <td> <?php 
												$luser=$utilisateur->afficher_futur_client($lcompte[4][0]);
											echo $luser[2][0].' '.$luser[3][0];
												
												
												?></td>
                                        
                                            </tr>
											
                                         </tbody>
	</table>


<table width="100%" border='1'>
                                            <thead>
                                            <tr>
                                                <th>Date transaction</th>
                                                <th>Type transaction</th>
                                                <th>Montant</th>
                                                
												
                                            </tr>
                                            </thead>
                                            <tbody>
											<?php
											for($i=0;$i<count($liste[0]); $i++){
											?>
                                            <tr class="odd gradeX">
                                                <td> <?php echo $liste[2][$i];?></td>
                                                <td> <?php echo $liste[1][$i];?></td>
                                                <td> <?php echo $liste[3][$i];?></td>
                                        
                                            </tr>
											<?php
											}
											?>
                                         </tbody>
	</table>

</body> 
</html> 