<?php
//require_once("validasessao.php");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
  <head>
    <title>simpleAutoComplete JQuery Plugin</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" content="pt-BR en">
    <script type="text/javascript" src="../js/simpleAutoComplete.js"></script>
    <link rel="stylesheet" type="text/css" href="../css/simpleAutoComplete.css" />
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
	<!-- ************************ -->
	<script type="text/javascript">
	$(document).ready(function()
	{
	    $('#sinal_autocomplete').simpleAutoComplete('Classes/ajax_query_proj.php',{
		autoComplClassName: 'autocomplete',
		selectedClassName: 'sel',
		attrCall: 'rel',
		atrCalifier: 'sinal'
	    },sinalVolta);
        });
	
	function sinalVolta( par )
	{
	    $("#codigoPeriodico").val( par[0] );
	    $("#issnPeriodico").val( par[1] );
		}
    </script>
	
  </head>
  <body>
		<?php 
			//include_once("../Classes/Conexao.class.php");

						
					
		?>
	<!--<form name="Logradouros" action="testaEnvio.php" method="POST">-->
	<form name="artigos" action="Ics-p.php" method="POST">
		<!-- ************************* -->
		
		<h2>ICs</h2>
		
		
		<fieldset>
			<legend>Ics </legend>
				</p></br>
					<div style="margin-left:10px;">
						
						</p></br>
						<label>Projeto&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="sinal_autocomplete2" name="tituloPeriodico" value="" autocomplete="off" style="width: 380px; height: 20px;" /></label> <!-- sinal_autocomplete -->
						<label>Bolsa&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="issnPeriodico" id="issnPeriodico" value="" style="width: 150px; height: 20px;"/></label>
						<input type="hidden" name="codigoPeriodico"  id="codigoPeriodico" value="" style="width: 150px; height: 20px;" />
						</p></br><!-- DISABLED -->
						<label>Aluno&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" id="tituloIc" name="tituloIc" value=""style="width: 580px; height: 20px;" /></label></p></br>
						<label>Inicio &nbsp;&nbsp;<input type="text" id="volumeIc" name="volumeIc" value="" autocomplete="off" style="width: 100px; height: 20px;" /></label>
						</label>
						<label>Fim&nbsp;&nbsp;<input type="text" id="numeroIc" name="numeroIc" value=""  style="width: 100px; height: 20px;" /></label>
						</label>
						<label>&nbsp;&nbsp;Bolsa&nbsp;<input type="text" id="paginasIc" name="paginasIc" value=""  style="width: 400px; height: 20px;" /></label>
						<!--<label>&nbsp;&nbsp;Ano&nbsp;<input type="text" id="reservadoIc" name="reservadoIc" value=""  style="width: 50px; height: 20px;" /></label>
                                                -->
					</div>
				</p></br>
		</fieldset>
				</p></br>

	<!--	<fieldset>
			<legend>Autores</legend>
				</p></br>
					<div style="margin-left:10px;">
						
						
					</div>			
		</fieldset>-->

				</p></br>
				
		<fieldset>
			<legend>Usu&aacute;rio</legend>
				</br>
						<label>&nbsp;&nbsp;Nome&nbsp;&nbsp;<input type="text" name="usuario" value="<?php echo $user= ($_SESSION['nome']);?>" id="usuario" disabled style="width: 150px; height: 20px;" /><input type="hidden" name="usuario" value="<?php echo $_SESSION[nome];?>" id="usuario" /></label>
						<label>&nbsp;&nbsp;Data&nbsp;&nbsp;<input type="text" name="data" value="<?php echo $data=date("d/m/Y");?>" id="data" disabled style="width: 150px; height: 20px;" /><input type="hidden" name="data" value="<?php echo $data=date("d/m/Y");?>" id="data" /></label>
						<label>&nbsp;&nbsp;Hora&nbsp;&nbsp;<input type="text" name="hora" value="<?php echo $hora=date("H:i:s");;?>" id="hora" disabled style="width: 150px; height: 20px;" /><input type="hidden" name="hora" value="<?php echo $hora=date("H:i:s");?>" id="hora" /></label>
				</p></br>
		</fieldset>
		
	</form>
		<tr>
			<input Type="submit" name="Enviar" value="Enviar" style="width: 70px; height: 30px;" alt="Enviar" onclick="document.artigos.submit();">
		</tr> 
	</body>
</html>