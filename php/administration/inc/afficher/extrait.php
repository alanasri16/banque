 <?php
$liste=$extrait->afficher_extrait_id($_GET['id']);
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
                                    <a href="#">Compte</a>
                                </li>
                                <li>
                                    <a href="?menu=emploi">Extrait client</a>
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
                                    <h1 class="custom-font"><strong>Extrait client</strong></h1>
                                    <ul class="controls">
                                        <li>
                                            <a href='inc/imprimer.php?id=<?php echo $_GET['id']; ?>' target='_blank'><i class="fa fa-plus mr-5"></i> Imprimer</a>
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
										<br> <br>
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
            