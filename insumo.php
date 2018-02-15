<?php
$paph = "../../transparencia/";
require_once("validasessao.php");
session_start();
echo $id = $_SESSION['id'];
echo $nome = $_SESSION['txt1'];
echo $iditem = $_SESSION['iditem'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <!-- Meta, title, CSS, favicons, etc. -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Insumo </title>

        <!-- Bootstrap -->
        <link href="<?php echo $paph; ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Font Awesome -->
        <link href="<?php echo $paph; ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!-- NProgress -->
        <link href="<?php echo $paph; ?>vendors/nprogress/nprogress.css" rel="stylesheet">
        <!-- iCheck -->
        <link href="<?php echo $paph; ?>vendors/iCheck/skins/flat/green.css" rel="stylesheet">
        <!-- bootstrap-wysiwyg -->
        <link href="<?php echo $paph; ?>vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
        <!-- Select2 -->
        <link href="<?php echo $paph; ?>endors/select2/dist/css/select2.min.css" rel="stylesheet">
        <!-- Switchery -->
        <link href="<?php echo $paph; ?>vendors/switchery/dist/switchery.min.css" rel="stylesheet">
        <!-- starrr -->
        <link href="<?php echo $paph; ?>vendors/starrr/dist/starrr.css" rel="stylesheet">
        <!-- bootstrap-daterangepicker -->
        <link href="<?php echo $paph; ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
        <!-- Ion.RangeSlider -->
        <link href="<?php echo $paph; ?>vendors/normalize-css/normalize.css" rel="stylesheet">
        <link href="<?php echo $paph; ?>vendors/ion.rangeSlider/css/ion.rangeSlider.css" rel="stylesheet">
        <link href="<?php echo $paph; ?>vendors/ion.rangeSlider/css/ion.rangeSlider.skinFlat.css" rel="stylesheet">
        <!-- Bootstrap Colorpicker -->
        <link href="<?php echo $paph; ?>vendors/mjolnic-bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css" rel="stylesheet">

        <link href="<?php echo $paph; ?>vendors/cropper/dist/cropper.min.css" rel="stylesheet">

        <!-- Custom Theme Style -->
        <link href="<?php echo $paph; ?>build/css/custom.min.css" rel="stylesheet">
        <script type="text/javascript" src="<?php echo $paph; ?>js/formataNum.js"></script>

        <script type="text/javascript" src="./js/jquery.js"></script>
        <script src="./js/jquery-1.4.min.js" type="text/javascript" charset="utf-8"></script>
        <script language="javascript" type="text/javascript" src="./js/document.js"></script> 	
        <script type="text/javascript" src="./js/simpleAutoComplete.js"></script>
        <link rel="stylesheet" type="text/css" href="simpleAutoComplete.css" />
        <script language="javascript" type="text/javascript" src="./js/document.js"></script> 	
         <script type="text/javascript">
            $(document).ready(function ()
            {
                $('#sinal_autocomplete2').simpleAutoComplete('./Classes/ajax_query_uni_med.php', {
                    autoComplClassName: 'autocomplete',
                    selectedClassName: 'sel',
                    attrCall: 'rel',
                    atrCalifier: 'sinal'
                }, sinalVolta);
            });

            function sinalVolta(par)
            {
                $("#codigocidade").val(par[0]);
                $("#estado").val(par[1]);
            }
        </script>	
       
       
        <style>
            legend {
                padding: 0.6em 1.5em;
                border:1px solid #2696B8;
                color:#2696B8;
                font-size:100%;
                text-align:left;
                background-color: #FFF;

            }

            fieldset {
                background-color: #FFF;
                background: url("images/htmlbg.jpg") repeat scroll 0 0 transparent;
                border: 1px solid #2696B8;
                width: 950px;
                text-decoration:none;
                font-size:100%;
                color: black;
            }
        </style>
        <!-- autocoplete -->

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
                                <h3>Cadastro de Insumo</h3>
                            </div>

                            <div class="title_right">
                                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search for...">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="button">Go!</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="x_panel">
                                    <div class="x_title">
                                        <h2>Informe  <small>detalhes do insumo</small></h2>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">
                                        <br />
                                        <form id="demo-form2" action="insumos.php" data-parsley-validate class="form-horizontal form-label-left" method="POST">
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Usuário <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="first-name" name=""  class="form-control col-md-7 col-xs-12" disabled="disabled" value="<?php echo $_SESSION['nome']; ?>">
                                                    <input type="hidden" id="first-name" name="orientador" required="required" class="form-control col-md-7 col-xs-12" value="<?php echo $id; ?>">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome do Insumo <span class="required">*</span>
                                                </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="first-name" name="razaosocial" required="required"  class="form-control col-md-7 col-xs-12" <?php echo "value=\"".$nome."\""; ?> />
                                                    <input type="hidden" id="" name="codigoIten"   class="form-control col-md-7 col-xs-12" value="<?php echo $iditem; ?>">
                                                    
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Unidade de Medida*</label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" id="sinal_autocomplete2" name="cidade" autocomplete="off" class="form-control col-md-7 col-xs-12" required="required"  name="tituloPeriodico" autocomplete="off" value="<?php echo $_SESSION['txt4']; ?>">

                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">Abreviatura </label>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <input type="text" name="estado" id="estado" class="form-control col-md-7 col-xs-12" disabled="disabled" value="<?php echo $_SESSION['txt5']; ?>">
                                                    <input type="hidden" name="codigocidade"  id="codigocidade" class="form-control col-md-7 col-xs-12"  value="<?php echo $_SESSION['txt3']; ?>"/>

                                                </div>
                                            </div>
                                            <div class="ln_solid"></div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                    <button class="btn btn-primary" type="button">Cancelar</button>
                                                    <button class="btn btn-primary" type="reset">Resetar</button>
                                                    <button type="submit" class="btn btn-success">Submeter</button>
                                                </div>
                                            </div>

                                        </form>
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
        <script src="<?php echo $paph; ?>vendors/jquery/dist/jqueryxx.min.js"></script>
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
        <!-- bootstrap-daterangepicker -->
        <script src="<?php echo $paph; ?>vendors/moment/min/moment.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
        <!-- bootstrap-wysiwyg -->
        <script src="<?php echo $paph; ?>vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
        <script src="<?php echo $paph; ?>vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
        <script src="<?php echo $paph; ?>vendors/google-code-prettify/src/prettify.js"></script>
        <!-- jQuery Tags Input -->
        <script src="<?php echo $paph; ?>vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
        <!-- Switchery -->
        <script src="<?php echo $paph; ?>vendors/switchery/dist/switchery.min.js"></script>
        <!-- Select2 -->
        <script src="<?php echo $paph; ?>vendors/select2/dist/js/select2.full.min.js"></script>
        <!-- Parsley -->
        <script src="<?php echo $paph; ?>vendors/parsleyjs/dist/parsley.min.js"></script>
        <!-- Autosize -->
        <script src="<?php echo $paph; ?>vendors/autosize/dist/autosize.min.js"></script>
        <!-- jQuery autocomplete -->
        <script src="<?php echo $paph; ?>vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
        <!-- starrr -->
        <script src="<?php echo $paph; ?>vendors/starrr/dist/starrr.js"></script>
        <!-- Custom Theme Scripts -->
        <script src="<?php echo $paph; ?>build/js/custom.min.js"></script>


        <!-- jquery.inputmask -->
        <script src="<?php echo $paph; ?>vendors/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
        <!-- jQuery Knob -->
        <script src="<?php echo $paph; ?>vendors/jquery-knob/dist/jquery.knob.min.js"></script>
        <!-- Cropper -->
        <script src="<?php echo $paph; ?>vendors/cropper/dist/cropper.min.js"></script>
        <script language="javascript" type="text/javascript" src="/js/cnpjcpf.js"></script> 

    </body>
</html>
<?php
unset($_SESSION['iditem']);
unset($_SESSION['txt1']);
unset($_SESSION['txt2']);
unset($_SESSION['txt3']);
unset($_SESSION['txt4']);
unset($_SESSION['txt5']);
unset($_SESSION['txt6']);
?>
