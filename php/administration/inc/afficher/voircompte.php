<?php
$luser=$utilisateur->afficher_futur_client($_GET["idclient"]);
$lcompte=$compte->afficher_compte_id($_GET["idclient"]);
?>
 <section id="content">

                <div class="page page-profile">

                    <div class="pageheader">

                        <h2>Compte client <span></span></h2>

                        <div class="page-bar">

                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html"><i class="fa fa-home"></i> Minovate</a>
                                </li>
                                <li>
                                    <a href="#">Compte</a>
                                </li>
                                <li>
                                    <a href="?menu=liste_client">Liste client</a>
                                </li>
                            </ul>
                            
                        </div>

                    </div>

                    <!-- page content -->
                    <div class="pagecontent">


                        <!-- row -->
                        <div class="row">
                             <!-- col -->
                            <div class="col-md-4">

                                <!-- tile -->
                                <section class="tile tile-simple">

                                    <!-- tile widget -->
                                    <div class="tile-widget p-30 text-center">

                                        <div class="thumb thumb-xl">
                                            <img class="img-circle" src="assets/images/arnold-avatar.jpg" alt="">
                                        </div>
                                        <h4 class="mb-0"><strong><?php echo $luser[2][0];?></strong> <?php echo $luser[3][0];?></h4>
                                        <span class="text-muted"><?php echo $luser[1][0];?></span>
                                        <div class="mt-10">
                                            <button class="btn btn-rounded-20 btn-sm btn-greensea"><?php echo $luser[6][0];?></button>
                                            <button class="btn btn-rounded-20 btn-sm btn-lightred"><?php echo $luser[11][0];?></button>
                                        </div>

                                    </div>
                                    <!-- /tile widget -->

                             
                                </section>
                                <!-- /tile -->


                              

                            </div>
                            <!-- /col -->

                            <!-- col -->
                            <div class="col-md-8">

                                <!-- tile -->
                                <section class="tile tile-simple">

                                    <!-- tile body -->
                                    <div class="tile-body p-0">

                                        <div role="tabpanel">

                                             <!-- Tab panes -->
                                            <div class="tab-content">

                                       
                                                <div role="tabpanel" class="tab-pane active" id="settingsTab">

                                                    <div class="wrap-reset">

                                                        <form class="profile-settings">

                                                            <div class="row">
                                                                <div class="form-group col-md-12 legend">
                                                                    <h4>Details compte</h4>
                                                                </div>
                                                            </div>

                                                            <div class="row">

                                                                <div class="form-group col-sm-6">
                                                                    <label for="num">Numéro de compte</label>
                                                                    <input type="text" class="form-control" id="num" value="<?php echo $lcompte[1][0];?>">
                                                                </div>

                                                                <div class="form-group col-sm-6">
                                                                    <label for="Solde"> Solde(Dt) </label>
                                                                    <input type="text" class="form-control" id="solde" value="<?php echo $lcompte[2][0];?>">
                                                                </div>

                                                            </div>

                                                            <div class="row">

                                                                <div class="form-group col-sm-6">
                                                                    <label for="type">Type compte </label>
                                                                    <input type="text" class="form-control" id="type_compte" value="<?php echo $lcompte[3][0];?>">
                                                                </div>
														<br> 		
														<br> 				
														
																		
                                            </form>
										 <a href="?menu=extrait&id=<?php echo $lcompte[0][0]?>"> <button type="button"> Voir extrait </button></a> 

                                                    </div>

                                                </div>
                                            </div>

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
                    <!-- /page content -->

                </div>
                
            </section>
            <!--/ CONTENT -->
