<?php

 $liste=$emploi->afficher_emplois($_GET['id']);	
if ($_POST["f"]==1) { 
   //Traitement lorsque tous les tests sont passés avec succès
	$poste=$_POST["poste"];
    $niveau=$_POST["niveau"];
    $ville=$_POST["ville"];
	$id_offre=$_GET['id'];
	

	$edit=$emploi->modifier_emploi($id_offre,$poste,$niveau,$ville);
		if($edit=="1"){ 
				
			echo' <meta http-equiv="refresh" content="0;URL=index.php?menu=emploi">';
		}
		else { echo $message="<center><strong>Erreur : Modification non &eacute;tablie!</strong></center>";}
}	      
	   
	   
	 ?>  
	   
	   <section id="content">

                <div class="page ouverture_compte">

                    <div class="pageheader">
                        <h1> <strong>BanKash </strong> </h1>
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i> BanKash</a>
                                </li>
                                <li>
                                    <a href="#">Espace Recrutement</a>
                                </li>
                                <li>
                                <a href="?menu=edit_offre">Modification des offres d'emplois</a>
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
                                <div class="tile-header">
								<div align="center"> 
                                    <h1 class="custom-font">   <strong> Form de modification des offres d'emplois </strong></h1> 
                                       </div>
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

                                    <form class="form-horizontal" role="form" action="" method="post">
                                      
										 <div class="form-group">
                                            <label for="inputposte" class="col-sm-2 control-label">Poste</label>
                                            <div class="col-sm-10">
                                                <input type="varchar" class="form-control" id="poste"   name="poste" value="<?php  echo $liste[1][0] ; ?>"  placeholder="poste">
                                            </div>
											
                                    
                                        <div class="form-group">
                                            <label for="inputniveau" class="col-sm-2 control-label">Niveau</label>
                                            <div class="col-sm-10">
                                                <input type="varchar" class="form-control" id="niveau" name="niveau" value="<?php  echo $liste[2][0] ; ?>" placeholder="Niveau">
                                            </div>
                                        </div>
										   <div class="form-group">
                                            <label for="inputville" class="col-sm-2 control-label">Ville</label>
                                            <div class="col-sm-10">
                                                <input type="varchar" class="form-control" id="ville" name="ville" value="<?php  echo $liste[3][0] ; ?>" placeholder="ville">
                                            </div>
                                        </div>
										
									<div class="form-actions">
                                    <button type="submit" class="btn blue"><i class="icon-ok"></i> Enregitrer</button>
									
                                    <button type="reset" class="btn"><i class=" icon-remove"></i> Annuler</button>
									
                                    </div>
							
										
									<input type="hidden" name="f" value="1">

										
                                   </form> 
                               <!-- /tile body -->

                            </section>
                            <!-- /tile -->
                        </div>
                       
                    </div>
                  
                </div>
            </section>
