 <?php
 $liste=$emploi->afficher_emploi();
 
 if (isset($_GET['sup'])){
$supprimer=$emploi->supprimer_emploi($_GET['sup']);
if ($supprimer=1){
echo $message="<center><strong>Message : Suppression avec succ&eacute;e!</strong></center>";	
echo' <meta http-equiv="refresh" content="1;URL=index.php?menu=emploi">';
								}}								
 ?>

 
 <section id="content">

                <div class="page page-tables-datatables">

                 <div class="pageheader">

                        <h1> <span>BanKash</span></h1>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.php"><i class="fa fa-home"></i> BanKash</a>
                                </li>
                                <li>
                                    <a href="#">Espace Recrutement</a>
                                </li>
                                <li>
                                    <a href="?menu=emploi">Liste des offres d'emploi</a>
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
                                    <h1 class="custom-font"><strong>Liste des offres d'emplois</strong></h1>
                                    <ul class="controls">
                                        <li>

           <a href="?menu=ajout_offre" "role="button" tabindex="0" id="add-entry"><i class="fa fa-plus mr-5"></i> Ajouter un offre </a>
                                        </li>
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
                                    <div class="table-responsive">
                                        <table class="table table-custom" id="editable-usage">
                                            <thead>
                                            <tr>
                                                <th>id_offre</th>
                                                <th>poste</th>
                                                <th>niveau</th>
                                                <th>ville</th>
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
                                                <td> <?php echo $liste[3][$i];?></td>
                                               
												<td><a href="?menu=edit_offre&id=<?php echo $liste[0][$i];?>" 
												data_toggle ="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <i class="fa fa-pencil-square-o"></i></a>Modifier 
												  
												 
												 <a href='?menu=emploi&sup=<?php echo $liste[0][$i];?>' 
												 onclick="return(confirm('Vous etes sures de vouloir supprimer?'))"
												data_toggle ="tooltip" data-placement="top" title="" data-original-title="Delete">
                                                <i class="fa fa-times"></i></a>supprimer 
                                                  </td>                 
                                            </tr>
											<?php
											}
											?>
                                         </tbody>
                                        </table>
                                    </div>
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
            