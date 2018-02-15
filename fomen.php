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
                                <h3>Acesso Rápido</h3>
                            </div>
                            <?php
                            include_once './arquivos/busca.php';
                            ?>
                        </div>

                        <div class="clearfix"></div>

                        <div class="">



                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><i class="fa fa-bars"></i> Inserção <small>...</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">


                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">ICs</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Fomento</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">2</a>
                                                </li>
                                            </ul>
                                            <div id="myTabContent" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
                                                    <p>A inserção de ICs consiste em informar nome do aluno de I.C., data de início e fim da I.C., se possui bolsa bem como o projeto em que está inserido. Se for projeto distinto do PPG basta selecionar OUTRO</p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content2" aria-labelledby="profile-tab">
                                                    <p>A inserção de fomento consite em informar o valor de fomento, data de início e término do financiamento, agência de fomento e número de I.Cs envolvidos.</p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade" id="tab_content3" aria-labelledby="profile-tab">
                                                    <p>.</p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6 col-xs-12">

                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2><i class="fa fa-bars"></i> Listagem <small>....</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>

                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                        <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                            <ul id="myTab1" class="nav nav-tabs bar_tabs right" role="tablist">
                                                <li role="presentation" class="active"><a href="#tab_content11" id="home-tabb" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">O que são</a>
                                                </li>
                                                <li role="presentation" class=""><a href="#tab_content22" role="tab" id="profile-tabb" data-toggle="tab" aria-controls="profile" aria-expanded="false">#</a>
                                                </li><!--
                                                <li role="presentation" class=""><a href="#tab_content33" role="tab" id="profile-tabb3" data-toggle="tab" aria-controls="profile" aria-expanded="false">Profile</a>
                                                </li>-->
                                            </ul>
                                            <div id="myTabContent2" class="tab-content">
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content22" aria-labelledby="profile-tabb">
                                                    <p>.</p>
                                                </div>
                                                <div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">
                                                    <p>São as consolidações de dados e podem ser encontradas como sub-tópico de cada menú como por exemplo ICS ou Fomento.</p>
                                                </div>

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="clearfix"></div>


<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><a href="fomento.php"><i class="fa fa-bars"></i> Inserir Fomento</a></h2>
            <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fachevron-up"></i></a>
                </li>
                <li class="dropdown">
                    <a href="ic.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fawrench"></i></a>

                </li>
                <li><a class="close-link"><i class="fa faclose"></i></a>
                </li>
            </ul>
            <div class="clearfix"></div>
        </div>

    </div>
</div>


<div class="col-md-6 col-sm-6 col-xs-12">
    <div class="x_panel">
        <div class="x_title">
            <h2><a href="fomentos_tab.php"><i class="fa fa-bars"></i> Listar 
                fomentos</a></h2>
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