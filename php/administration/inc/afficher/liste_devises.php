<?php
$liste=$devises->afficher_devises();
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
                                    <a href="?menu=devises">Devises</a>
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
                                    <h1 class="custom-font"><strong>Cours d'échange de devises en <?php echo date('Y-m-d') ?></strong></h1>
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
                                    <div class="table-responsive">
                                        <table class="table table-custom" id="editable-usage">
                                            <thead>
                                            <tr>
                                                <th>id_devise</th>
                                                <th>nom</th>
                                                <th>prix_achat</th>
                                                <th>prix_vente</th>
                                                <th>pays</th>
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
                                                <td> <?php echo $liste[4][$i];?></td>
												
												<td><a href="?menu=edit_devises&id=<?php echo $liste[0][$i];?>" 
												data_toggle ="tooltip" data-placement="top" title="" data-original-title="Edit"><i class="fa fa-pencil-square-o"></i></a>Modifier </td>
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
            