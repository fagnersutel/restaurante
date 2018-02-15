<?php
$paph = "../../transparencia/";
require_once 'validasessao.php';   

//include_once '../Classes/Artigos.class.php';
//$ics = new Artigos($codigoArtigo, $tituloArtigo, $volumeArtigo, $numeroArtigo, $paginasArtigo, $issueArtigo, $reservadoArtigo, $codigoPeriodico);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DataTables</title>

        <!-- Bootstrap -->
        <link href="<?php echo $paph; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo $paph; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo $paph; ?>vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo $paph; ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- Datatables -->
        <link href="<?php echo $paph; ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $paph; ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $paph; ?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $paph; ?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo $paph; ?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo $paph; ?>build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <!-- Titulo top -->
<?php
include_once './titulotop.php';
?>
                        <!-- /Titulo top -->

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
<?php
include_once './profile.php';
?>
                        <!-- /menu profile quick info -->

                        <br />

                        <!-- sidebar menu -->
<?php
include_once './sidebar_menu.php';
?>
                        <!-- /sidebar menu -->

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
                                <h3>Artigos do ano <small><?php echo $chave; ?></small></h3>
                            </div>                           
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">




                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Tabela de Registros <small>com filtros</small></h2>
                                        <ul class="nav navbar-right panel_toolbox">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                            <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                                <ul class="dropdown-menu" role="menu">
                                                    <li><a href="#">Settings 1</a>
                                                    </li>
                                                    <li><a href="#">Settings 2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <p class="text-muted font-13 m-b-30">
                                            Utilize o campo à direita pesquisar/filtrar para refinar a pesquisa, ou clique nos títulos de colunas para ordenar.
                                        </p>

                                        <table id="datatable-buttons" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Indice</th>
                                                    <th>Título</th>
                                                    <th>Volume</th>
                                                    <th>Fasc.</th>
                                                    <th>Páginas</th>
                                                    <th>Ano</th>
                                                </tr>
                                            </thead>
                                            <tbody>
<?php
if(isset($chave)){
     if($autor == "true"){
         
        $ics->listarSeusArtigosAno($chave, $_SESSION['id']);
    }else{
        $ics->listarArtigosAno($chave);
    }
}
else
{
    if($autor == "true"){
        $ics->ListarTodosSeus($_SESSION['id']);   
    }if(isset($ano1) and isset($ano2)){
        $ics->listaArquigosQualis($ano1, $ano2);
    }else{
        $ics->ListarTodos();   
    }
}


?>
                                               

                                            </tbody>


                                        </table>
                                    </div>
                                </div>
                            </div>








                        </div>
                    </div>
                </div>
                <!-- /page content -->

                <!-- footer content -->
<?php
include_once 'footer.php';
?>               
                <!-- /footer content -->
            </div>
        </div>

        <!-- jQuery -->
        <script src="<?php echo $paph; ?>vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="<?php echo $paph; ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="<?php echo $paph; ?>vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="<?php echo $paph; ?>vendors/nprogress/nprogress.js"></script>
        <!-- iCheck -->
        <script src="<?php echo $paph; ?>vendors/iCheck/icheck.min.js"></script>
        <!-- Datatables -->
        <script src="<?php echo $paph; ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
        <script src="<?php echo $paph; ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/jszip/dist/jszip.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/pdfmake/build/pdfmake.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/pdfmake/build/vfs_fonts.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="<?php echo $paph; ?>build/js/custom.min.js"></script>

    </body>
</html>