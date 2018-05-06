 <?php 
$liste=$devises->afficher_devise($_GET['id']);	
if ($_POST["f"]==1) { 
   //Traitement lorsque tous les tests sont passés avec succès
	$nom=$_POST["nom"];
	$prix_achat=$_POST["prix_achat"];
	$prix_vente=$_POST["prix_vente"];
	$pays=$_POST["pays"];
	$id_devise=$_GET['id'];
	
	$edit=$devises->modifier_devises($id_devise,$nom,$prix_achat,$prix_vente,$pays);
		if($edit=="1"){ 
				
			echo' <meta http-equiv="refresh" content="0;URL=index.php?menu=devises">';
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
                                    <a href="#">Devises</a>
                                </li>
                                <li>
                                <a href="#">Modification du taux d'échange </a>
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
                                    <h1 class="custom-font">   <strong> Form de modification du taux d'échange </strong></h1> 
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
                                         ====               <i class="fa fa-expand"></i> Fullscreen
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
                                            <label for="inputnom" class="col-sm-2 control-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input type="varchar" class="form-control" id="nom" name="nom" value="<?php  echo $liste[1][0] ; ?>" placeholder="nom">

                                            </div>
                                        </div>
										 <div class="form-group">
                                            <label for="inputachat" class="col-sm-2 control-label">Prix_achat</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="prix_achat"  name="prix_achat"  value="<?php  echo $liste[2][0] ; ?>" placeholder="prix_achat">
                                            </div>
											<div class="form-group">
                                            <label for="inputvente" class="col-sm-2 control-label">Prix_vente</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="prix_vente"  name="prix_vente" value="<?php  echo $liste[3][0] ; ?>" placeholder="prix_vente">
                                            </div>
											
                                        </div>
                                       
										
                                        <div class="form-group">
                                            <label for="inputpays" class="col-sm-2 control-label">Pays</label>
                                            <div class="col-sm-10">
                                                <input type="varchar" class="form-control" id="pays"  name="pays" value="<?php  echo $liste[4][0] ; ?>" placeholder="pays">
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
