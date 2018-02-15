<?php
//verifica se existe o campo $_POST['pesquisa'] vindo do formulário
$pesq = $_GET['busca'];

//verifica se o campo está vazio
if (empty($pesq)) {
    echo 'Digite uma palavra no campo de busca.';
} elseif (strlen($pesq) < 3) {
    echo 'Digite pelo menos três letras.';
} else {
//pasta onde está os arquivos da pesquisa        
    $pasta = "";
//arquivo atual
    $atual = "index.php";

//faz a listagem dos arquivos da pasta indicada, e atribui a um array
    $arquivo1 = glob("./$pasta/*.php", GLOB_BRACE);
    $arquivo2 = glob("./$pasta/*.php", GLOB_BRACE);
    $arquivo3 = glob("./$pasta/*.php", GLOB_BRACE);


    $busca = array_merge($arquivo1, $arquivo2, $arquivo3);
//percorre o array
    foreach ($busca as $item) {
//verifica se o arquivo não é o atual
        if ($item !== $atual or $item !== "mapa_do_site") {
//abre o arquivo
            $abrir = fopen($item, "r");
//faz um loop até chegar o final do arquivo
            while (!feof($abrir)) {
//ler arquivo
                $lendo = fgets($abrir);
//remove os caracteres html e php
                $lendo = strip_tags($lendo);

//verifica se tem algum um item da pesquisa
                if (stristr($lendo, $pesq) == true) {
//remove a extensão .php
                    $dados = str_replace(".php", "", $item);
//retorna o nome apenas do arquivo
                    $area = dirname($dados);
                    $area2 = str_replace("/arquivos", "", $area);
                    $dados = basename($dados);

//coloca o link no array
                    //$result[] = '<a href="' . $dados . '.php">' . $dados . '</a>';
                    $result[] = '<div class="x_content"><a href="'.$dados.'.php">'.$dados.'</a></div>';
//apaga a variavel $dados
                    unset($dados);
                }
//apague a variavel lendo
                unset($lendo);
            }
//fecha o arquivo
            fclose($abrir);
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Portal Transparencia</title>

        <!-- Bootstrap -->
        <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="vendors/nprogress/nprogress.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="build/css/custom.min.css" rel="stylesheet">
    </head>

    <body class="nav-md">
        <div class="container body">
            <div class="main_container">
                <div class="col-md-3 left_col">
                    <div class="left_col scroll-view">
                        <div class="navbar nav_title" style="border: 0;">
                            <a href="index.php" class="site_title"><i class="fa fa-search"></i> <span>Transparência</span></a>
                        </div>

                        <div class="clearfix"></div>

                        <!-- menu profile quick info -->
<?php
include_once './profile.php';
?>
                        <!-- /menu profile quick info -->

                        <br />

<?php
include_once './mapa_do_site.php';
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
                                <h3>Busca</h3>
                            </div>

                            <div class="title_right">
                                <form action="busca.php" method="get">
                                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="busca" placeholder="Buscar...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="submit">Buscar</button>
                                            </span>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="clearfix"></div>

                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Resultados</h2>

                                        <div class="clearfix"></div>
                                    </div>
<?php
/* IMPRIMIR O RESULTADO */

//verifica seo result existe
if (isset($result) && count($result) > 0) {
//remove os resultado iguais
    $result = array_unique($result);

//total de resultados
    $total = count($result);
    echo $total . ' resultados encontrados.';

    echo '<ul>';

//percorre o array
    foreach ($result as $link) {
        echo $link;
    }
    echo '<ul>';
} else {
    echo 'Nenhum resultado encontrado.';
}
?>                              </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /page content -->

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

        <!-- jQuery -->
        <script src="vendors/jquery/dist/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- FastClick -->
        <script src="vendors/fastclick/lib/fastclick.js"></script>
        <!-- NProgress -->
        <script src="vendors/nprogress/nprogress.js"></script>
        <!-- validator -->
        <script src="vendors/validator/validator.js"></script>

        <!-- Custom Theme Scripts -->
        <script src="build/js/custom.min.js"></script>

    </body>
</html>