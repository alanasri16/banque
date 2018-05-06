  <?php 
 
$liste=$utilisateur->afficher_futur_client($_GET['id']);	
if ($_POST["f"]==1) { 
	$cin=$_POST["cin"];
	$nom=$_POST["nom"];
	$prenom=$_POST["prenom"];
	$date_naiss=$_POST["date_naiss"];
	$sexe=$_POST["sexe"];
	$tel=$_POST["tel"];
	$ville=$_POST["ville"];
	$identifiant=$_POST["identifiant"];
	$login=$_POST["login"];
	$type_compte=$_POST["type_compte"];
	$email=$_POST["email"];
	$id_utilisateur=$_GET['id'];
	
	$edit=$utilisateur->modifier_futurclient($id_utilisateur,$cin,$nom,$prenom,$date_naiss,$sexe,$tel,$ville,$identifiant,$login,$type_compte,$email);
		if($edit=="1"){ 
				
			echo' <meta http-equiv="refresh" content="0;URL=index.php?menu=liste_futurclient">';
		}
		else { echo $message="<center><strong>Erreur : Modification non &eacute;tablie!</strong></center>";}
}	

?>
 
 
 <section id="content">

                <div class="page edit_ouverture">

                    <div class="pageheader">
                        <h1> <strong>BanKash </strong> </h1>
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i> BanKash</a>
                                </li>
                                <li>
                                    <a href="#">Comptes</a>
                                </li>
                                <li>
                                    <a href="?menu=form_ouverture">Formulaire de Modification de futurclient</a>
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
                                    <h1 class="custom-font">   <strong> Demande d'ouverture un compte </strong></h1> 
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

                                    <form class="form-horizontal" role="form" method="post" action="">
                                        <div class="form-group">
                                            <label for="inputcin" class="col-sm-2 control-label">Cin</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="cin" placeholder="cin" value="<?php  echo $liste[1][0] ; ?>">

                                            </div>
                                        </div>
										 <div class="form-group">
                                            <label for="inputnom" class="col-sm-2 control-label">Nom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nom" placeholder="nom" value="<?php  echo $liste[2][0] ; ?>">
                                            </div>
											<div class="form-group">
                                            <label for="inputprenom" class="col-sm-2 control-label">Prenom</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="prenom" placeholder="prenom" value="<?php  echo $liste[3][0] ; ?>">
                                            </div>
											
                                        </div>
                                        <div class="form-group">
                                            <label for="inputdate_naiss" class="col-sm-2 control-label">Date naissance</label>
                                            <div class="col-sm-10">
                                                <input type="date" class="form-control" name="date_naiss" value="<?php  echo $liste[4][0] ; ?>" >
                                            </div>
                                        </div>
										
										 <div class="form-group">
                                            <label for="inputsexe" class="col-sm-2 control-label " name="sexe" value="<?php  echo $liste[5][0] ; ?>">Sexe</label>
                                            <div class="col-sm-10">
                                                <input type="radio" name="sexe" value="Homme" checked> Homme <br>
                                                <input type="radio" name="sexe" value="Femme">Femme
                                            </div>
                                        </div>
                                      
                                        <div class="form-group">
                                            <label for="inputtél" class="col-sm-2 control-label">Numéro télephone</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="tel" placeholder="numéro télephone" value="<?php  echo $liste[6][0] ; ?>">
                                            </div>
                                        </div>
                                       
									    <div class="form-group">
                                            <label for="inputville" class="col-sm-2 control-label">Ville</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="ville" placeholder="ville" value="<?php  echo $liste[7][0] ; ?>">
                                            </div>
                                        </div>
									   
                                         <div class="form-group">
										 <label for="inputidentifiant" class="col-sm-2 control-label">identifiant</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="identifiant" placeholder="identifiant" value="<?php  echo $liste[8][0] ; ?>">
                                            </div>
                                            </div>
											
											
											 <div class="form-group">
											 <label for="inputlogin" class="col-sm-2 control-label">login</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="login" placeholder="login" value="<?php  echo $liste[9][0] ; ?>">
											
                                            </div>
                                            </div>
											
											 <div class="form-group">
                                            <label for="inputcmpt" class="col-sm-2 control-label">Type compte</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="type_compte" placeholder="type compte" value="<?php  echo $liste[10][0] ; ?>">
                                            </div>
                                             </div>
										
										  <div class="form-group">
											<label for="inputemail" class="col-sm-2 control-label">Email</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="email" placeholder="email" value="<?php  echo $liste[11][0] ; ?>">
                                            </div>
										
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 ">
                                                <label class="checkbox checkbox-custom">
                                                    <input type="checkbox" ><i></i>
                                                   <strong> J'accepte </strong>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-sm-offset-2 col-sm-10">
                                                <button type="submit" class="btn btn-rounded btn-primary btn-sm">Enregistrer</button>
                                                <button type="reset" class="btn btn-rounded btn-primary btn-sm">Annuler</button>
                                            </div>
                                        </div>
										<input type="hidden" name="f" value="1">
                                    </form>

                                </div>
                                <!-- /tile body -->

                            </section>
                            <!-- /tile -->
                        </div>
                       
                    </div>
                  
                </div>
            </section>
            