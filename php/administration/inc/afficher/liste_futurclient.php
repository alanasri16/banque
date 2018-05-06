<?php 
$liste=$utilisateur->afficher_futurclient();
if (isset($_GET['sup'])){
$supprimer=$utilisateur->supprimer_futurclient($_GET['sup']);
if ($supprimer=1){
echo $message="<center><strong>Message : Suppression avec succ&eacute;e!</strong></center>";	
echo' <meta http-equiv="refresh" content="2;URL=index.php?menu=liste_futurclient">';
								}
								}

if (isset($_GET['validation'])){
	
$update=$utilisateur->validation_client($_GET['validation']);
if ($update==1){
	
	
		echo $message="<center><strong>Message : succee de validation!</strong></center>";	
echo' <meta http-equiv="refresh" content="0;URL=index.php?menu=liste_futurclient">';
								}
else {
	echo $message="<center><strong>Message : Erreur de validation!</strong></center>";	

}
								}								

?> 
 <section id="content">

                <div class="page page-tables-datatables">

                 <div class="pageheader">

                        <h1> <span>BanKash</span></h1>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> BanKash</a>
                                </li>
                                <li>
                                    <a href="#">Compte</a>
                                </li>
                                <li>
                                    <a href="?menu=liste_ouverture">Liste des demandes d'ouverture des comptes</a>
                                </li>
                            </ul>

                        </div>

                    </div>   

                    <!-- row -->
                    <div class="row">
                        <!-- col -->
                        <div class="col-md-12">
                            <!-- tile -->
                            <section class="tile">

                                <!-- tile header -->
                                <div class="tile-header dvd dvd-btm">
                                    <h1 class="custom-font"><strong>Liste des futurclients</strong></h1>
                                    <ul class="controls">
                                       
                                        <li class="dropdown">

                                            <a role="button" tabindex="0" class="dropdown-toggle settings" data-toggle="dropdown">
                                                <i class="fa fa-cog"></i>
                                                <i class="fa fa-spinner fa-spin"></i>
                                            </a>

                                            <ul class="dropdown-menu pull-right with-arrow animated littleFadeInUp">
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-toggle">
                                                        <span class="minimize"><i class="fa fa-angle-down"></i>&nbsp;&nbsp;&nbsp;Minimize</span>
                                                        <span class="expand"><i class="fa fa-angle-up"></i>&nbsp;&nbsp;&nbsp;Expand</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-refresh">
                                                        <i class="fa fa-refresh"></i> Refresh
                                                    </a>
                                                </li>
                                                <li>
                                                    <a role="button" tabindex="0" class="tile-fullscreen">
                                                        <i class="fa fa-expand"></i> Fullscreen
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                        <li class="remove"><a role="button" tabindex="0" class="tile-close"><i class="fa fa-times"></i></a></li>
                                    </ul>
                                </div>
                                <!-- /tile header -->

                                <!-- tile body -->
                                <div class="tile-body">
                                        <table class="table" id="liste_ouverture">
                                            <thead>
                                            <tr>
											     <th>id_utilisateur</th>
                                                <th>Cin</th>
                                                <th>Nom</th>
                                                <th>Prenom</th>
                                                <th>Date_naissance</th>
                                                <th>Sexe</th>
                                                <th>Tel</th>
                                                <th>Ville</th>
                                                <th>Identifiant</th>
                                                <th>Mot_passe</th>
                                                <th>Type_compte</th>
                                                <th>Email</th>
                                               
                                                <th style="width: 160px;" class="no-sort">Actions</th>
                                            </tr>
                                            </thead>
                                            <tbody>
											<?php
											for($i=0;$i<count($liste[0]); $i++){
											?>
                                            <tr class="odd gradeX">
                                                <td> <?php echo $liste[0][$i];?></td>
                                                <td> <?php echo $liste[1][$i];?></td>
                                                <td> <?php echo $liste[2][$i];?></td>
                                                <td> <?php echo $liste[3][$i];?> </td>
                                                <td> <?php echo $liste[4][$i];?> </td>
                                                <td> <?php echo $liste[5][$i];?> </td>
                                                <td> <?php echo $liste[6][$i];?> </td>
                                                <td> <?php echo $liste[7][$i];?> </td>
                                                <td> <?php echo $liste[8][$i];?> </td>
                                                <td> <?php echo $liste[9][$i];?> </td>
                                                <td> <?php echo $liste[10][$i];?> </td>
                                                <td> <?php echo $liste[11][$i];?> </td>
                                                
                                             
                                  <td> 
												 <a href="?menu=edit_futurclient&id=<?php echo $liste[0][$i];?>" 
												data_toggle ="tooltip" data-placement="top" title="" data-original-title="Edit">
												<i class="fa fa-pencil-square-o"></i></a>Modifier <br>
												
												 <a href="?menu=liste_futurclient&sup=<?php echo $liste[0][$i];?>"
									             onclick="return(confirm('Vous etes sures de vouloir supprimer?'))" title="" 
											     data_toggle ="tooltip" data-placement="top" title="" data-original-title="Delete">
												<i class="fa fa-times"></i></a>Supprimer <br>
												
												<a href="?menu=liste_futurclient&validation=<?php echo $liste[0][$i]; ?>" 
												data_toggle ="tooltip" data-placement="top" title="" data-original-title="valide">
												<i class="fa fa-check"></i></a>Valider 
                                                           
                                                
                                                                   
                                </td>
                </tr>
				 
			 
											<?php
											}
											?>
                                           </tbody>
                                        </table>
                                    </div>
                                
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->

                        
                        </div>
                        <!-- /col -->
                    </div>
                    <!-- /row -->

                </div>
                
            </section>
