<?php
$paph = "../../transparencia/";
//require_once("validasessao.php");
?>
<!DOCTYPE html>
<html lang="pt">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portal Analítico</title>

        <!-- Bootstrap -->
        <link href="<?php echo $paph; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo $paph; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo $paph; ?>vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo $paph; ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-progressbar -->
        <link href="<?php echo $paph; ?>vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">


        <!-- Custom Theme Style -->
        <link href="<?php echo $paph; ?>build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title"><i class="fa fa-search"></i> <span>Produção PPG</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
                        <?php
                        include_once './profile.php';
                        ?>
                        <!-- /menu profile quick info -->

                        <br />

                        <?php
                        include_once './sidebar_menu.php';
                        ?>
                        <!-- /menu footer buttons -->
                        <div class="sidebar-footer hidden-small">
                            <a data-toggle="tooltip" data-placement="top" title="Settings">
                                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Lock">
                                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
                            </a>
                            <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
                            </a>
                        </div>
                        <!-- /menu footer buttons -->
                    </div>
                </div>

                <!-- top navigation -->
                <?php
                include_once './top_nav.php';
                ?>
                <!-- /top navigation -->

                <!-- page content -->
                <div class="right_col" role="main">
                    <div class="">
                        <div class="page-title">
                            <div class="title_left">
                                <h3>Operação Realizada com sucesso</h3>
                            </div>
                            <?php
                            include_once './arquivos/busca.php';
                            ?>
                        </div>

                        <div class="clearfix"></div>

                        <div class="">



                          
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><a href="index.php"><i class="fa fa-bars"></i> Cadastro efetuado com sucesso!</a></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fachevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fawrench"></i></a>

                                            </li>
                                            <li><a class="close-link"><i class="fa faclose"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>

                                </div>
                            </div>
                           
                            <div class="clearfix"></div>




                        </div>
                    </div>
                </div>




                <!-- footer content -->
                <footer>
                    <div class="pull-right">
                        Portal Transparência by <a href="https://sutel.com.br">Sutel</a>
                    </div>
                    <div class="clearfix"></div>
                </footer>
                <!-- /footer content -->
            </div>
        </div>

        <div id="custom_notifications" class="custom-notifications dsp_none">
            <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
            </ul>
            <div class="clearfix"></div>
            <div id="notif-group" class="tabbed_notifications"></div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo $paph; ?>vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo $paph; ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo $paph; ?>vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo $paph; ?>vendors/nprogress/nprogress.js"></script>
        <!-- bootstrap-progressbar -->
        <script src="<?php echo $paph; ?>vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
        <!-- iCheck -->
        <script src="<?php echo $paph; ?>vendors/iCheck/icheck.min.js"></script>
        <!-- PNotify -->
        <script src="<?php echo $paph; ?>vendors/pnotify/dist/pnotify.js"></script>
        <script src="<?php echo $paph; ?>vendors/pnotify/dist/pnotify.buttons.js"></script>
        <script src="<?php echo $paph; ?>vendors/pnotify/dist/pnotify.nonblock.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?php echo $paph; ?>build/js/custom.min.js"></script>

    </body>
</html>