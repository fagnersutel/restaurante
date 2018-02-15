<?php ob_start();
/*
==========================
programa: principal.php
funcao: pagina principal do sistema
autor: Fagner
sistema: 
==========================
*/
	require_once("validasessao.php");  
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <!-- iso-8859-1 --->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!--<meta charset="utf-8"/>-->
<title>FAMURS</title>

<!-- autocoplete -->
<link href="../model.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="../js/jquery.js"></script>
<script src="../js/jquery-1.4.min.js" type="text/javascript" charset="utf-8"></script>
<script language="javascript" type="text/javascript" src="../js/document.js"></script> 	
	<script type="text/javascript">
	$(document).ready(function()
	{
	    $('#sinal_autocomplete').simpleAutoComplete('../Classes/ajax_query.php',{
		autoComplClassName: 'autocomplete',
		selectedClassName: 'sel',
		attrCall: 'rel',
		atrCalifier: 'sinal'
	    },sinalVolta);
        });
	
	function sinalVolta( par )
	{
	    $("#ctbSinal").val( par[0] );
	    $("#var1").val( par[1] );
		}
        </script>

	<script type="text/javascript">
	$(document).ready(function()
	{
	    $('#sinal_autocomplete2').simpleAutoComplete('../Classes/ajax_query_proj.php',{
		autoComplClassName: 'autocomplete',
		selectedClassName: 'sel',
		attrCall: 'rel',
		atrCalifier: 'sinal'
	    },sinalVolta);
        });
	
	function sinalVolta( par )
	{
	    $("#ctbSinal").val( par[0] );
	    $("#var1").val( par[1] );
		}
        </script>
<!-- autocoplete -->
</head>
	<body>


	<div id="topbanner">
		<h1 id="sitename">
			Gestor de Produção Científica
			<span><font align="center" size="3" color="orange">Sutel Facilities</font></span>
		</h1>
	</div>
	<div id="wrap">
		<div id="menu">
			<?php
				include_once ('../inc/inc.menu.topo.php');
				include_once ('../inc/inc.verificaSenha.php');
			?>
		</div>
	<!-- inicia o menu de topo para suporte ao usu�rio -->
	<div id="submenu">
		<?php
			include_once ('../inc/inc.subMenu.php');
		?>
	</div>
	<!-- finaliza o menu de topo para suporte ao usu�rio -->
	<div id="content">

	<!-- inicio menu lateral -->
	<div id="sidebar1">
		<h2 class="subhead">MENU</h2>
			<div id="menua">
				<?php
					require_once("../inc/inc.menu.php");
				?>
			</div>
	</div>
	<!-- fim menu lateral -->
	</div>

	<div id="conteudo" class="conteudo" >

<?php				
	// if que inclui as paginas
	if (isset($_GET['pag'])) {
	include($_GET['pag']);
	} else {
		echo $inicio =<<<inicio
<!-- <h2>Apresenta&ccedil;&atilde;o</h2></br> --></p></br>
<img src="images/capes.jpeg" width="250" height="150" alt="imag" class="leftalign" />
<h2>Apresenta&ccedil;&atilde;o</h2></br>
<p>Esta ferramenta on-line é um suporte para organiza��o das informa��es a serem inseridas no sistema Aplicativo Coleta de Dados CAPES, n�o o substituindo!!!</p><br>
<p>O Aplicativo Coleta de Dados CAPES � um sistema informatizado desenvolvido com o objetivo de coletar informa��es dos cursos de mestrado, doutorado e mestrado profissional integrantes do Sistema Nacional de P�s-Gradua��o.<p>
Conforme estabelece a Portaria n� 5, de 27 de janeiro de 2012, o prazo para envio do relat�rio Coleta de Dados do ano base 2011, ser� a partir das 08h00 de 19 de mar�o at� as 18h00 de 18 de abril de 2012. O envio do relat�rio � feito atrav�s do sistema CAPESNet exclusivamente pelas Pr�-Reitorias de Pesquisa e P�s-Gradua��o (ou �rg�os equivalentes).
<p><br>
Acesse a p�gina de download do sistema. <a href="http://coleta.capes.gov.br/downloadmozilla.html">download</a>
<p><br>
Aten��o! O aplicativo Coleta de Dados foi testado, �nica e exclusivamente, em ambiente operacional Windows XP. O uso do aplicativo em outros ambientes, tais como Windows Vista, Windows 7 ou sistemas baseados em Linux, n�o � recomendado.
</p></br>
<!-- <h2>Destaques</h2></br> -->
<p><img src="images/capes.jpeg" width="250" height="150" alt="rightalign" class="rightalign" />
<!--<h2>&nbsp;</h2></br>-->
<h3>Documenta��o relacionada</h3>

<ul>

<li><a class="pdf" href="http://www.capes.gov.br/images/stories/download/coletadados/ManualSimplificado_ColetaDeDados12_24jan12.pdf" target="_blank" title="Manual simplificado coleta">Manual do Usu�rio (vers�o simplificada)</a></li>

<li><a class="pdf" href="http://www.capes.gov.br/images/stories/download/coletadados/Manual-do-Usuario_Coleta12_AposPort-02janeiro2012.pdf" target="_blank" title="Manual do Usuario Coleta 12.0">Manual do Usu�rio (vers�o completa)</a></li>

<li><a class="pdf" href="http://www.capes.gov.br/images/stories/download/coletadados/ManualTecnico_Coleta.pdf" target="_blank" title="Manual T�cnico">Manual de Documenta��o T�cnica </a></li>

<li><a class="pdf" href="http://www.capes.gov.br/images/stories/download/coletadados/Portaria-01_04jan2012_Retificada.pdf" target="_blank">Portaria Capes 001/2012</a></li>

<li><a class="pdf" href="http://www.capes.gov.br/images/stories/download/coletadados/Portarias_02_04jan2012.pdf" target="_blank">Portaria Capes 002/2012</a></li>

<li><a class="pdf" href="http://www.capes.gov.br/images/stories/download/coletadados/PortariaCapes_099_2005.pdf" target="_blank">Portaria Capes 099/2005</a></li>

<li><a class="pdf" href="http://www.capes.gov.br/images/stories/download/coletadados/ParametrosAreas_DocentesPermanetes.pdf" target="_blank">Par�metros das �reas para docentes permanentes</a></li>
stories/download/coletadados/ManualTecnico_Coleta.pdf
<li><a class="pdf" href="http://www.capes.gov.br/images/stories/download/coletadados/FAQ_Coleta_de_Dados_11.pdf" target="_blank" title="FAQ Coleta">D�vidas mais freq�entes - Coleta CAPES</a></li>

</ul>

<p><br>
<p><strong>Atendimento ao usu�rio:</strong></p>

<p>Orienta��es adicionais podem ser obtidas atrav�s do <em>e-mail</em> 
 <script language='JavaScript' type='text/javascript'>
 <!--
 var prefix = 'm&#97;&#105;lt&#111;:';
 var suffix = '';
 var attribs = '';
 var path = 'hr' + 'ef' + '=';
 var addy25514 = 'c&#111;l&#101;t&#97;' + '&#64;';
 addy25514 = addy25514 + 'c&#97;p&#101;s' + '&#46;' + 'g&#111;v' + '&#46;' + 'br';
 document.write( '<a ' + path + '\'' + prefix + addy25514 + suffix + '\'' + attribs + '>' );
 document.write( addy25514 );
 document.write( '<\/a>' );
 //-->
 </script><script language='JavaScript' type='text/javascript'>
 <!--
 document.write( '<span style=\'display: none;\'>' );
 //-->
 </script>Este endere�o de e-mail est� protegido contra spambots. Voc� deve habilitar o JavaScript para visualiz�-lo.
 <script language='JavaScript' type='text/javascript'>
 <!--
 document.write( '</' );
 document.write( 'span>' );
 //-->
 </script> .</p>

<p><br>
<h3>Apoio ao Preenchimento</h3>

<p>Desde 2006 os programas de p�s-gradua��o contam com profissionais, dentro das suas pr�prias Institui��es, para auxiliar o processo de preenchimento do Coleta de Dados. Conhe�a <a title="Integrantes do Grupo Apoio Coleta" target="_blank" href="http://www.capes.gov.br/images/stories/download/coletadados/GrupoApoioColeta_Pagina_24jan12.pdf">aqui</a> os membros do grupo <a title="Apoio Coleta" target="_blank" href="http://www.capes.gov.br/images/stories/download/coletadados/Texto_sobre_Apoio-Coleta_11-08.pdf">"Apoio Coleta"</a> que poder�o ajud�-lo no preenchimento do Aplicativo.</p>

<p><strong></strong><a title="Tutorial Curr�culo Lattes" href="http://coleta.capes.gov.br/tutoriais/curriculo_lattes_12-02-09.htm">Clique aqui</a> para ver o tutorial de aproveitamento do Curr�culo <em>Lattes</em>.</p>

<h3>Arquivos Espec�ficos para Coleta 2011</h3>

<p>Exclusivo para programas novos ou que n�o obtiveram autoriza��o direta para "Iniciar Preenchimento do Pr�ximo Ano" pelo Coleta de Dados.</p>

<ul class="aplicativo">

<li><a title="COLETA-Espec�ficos" target="_blank" href="http://coletaespecificos.capes.gov.br/coletaespecificos/">Buscar IES</a></li>

</ul>

<p><span style="color: #ff0000;"><strong>Aten��o!</strong></span> Esse procedimento exige senha e deve ser realizado pela Pr�-Reitoria de Pesquisa e P�s-Gradua��o ou �rg�o equivalente na IES.</p>

<h3>Integra��o com o Aplicativo Cadastro de Discentes</h3>

<p>Para fazer download de arquivo contendo informa��es sobre discentes do Programa de P�s-Gradua��o, para importa��o no aplicativo Coleta, clique no bot�o a seguir.</p>

<ul class="aplicativo">

<li><a title="COLETA-Espec�ficos" target="_blank" href="http://icd.capes.gov.br/integracaocoletadiscente/">Buscar IES</a></li>

</ul>

<p>&nbsp;</p>
inicio;
	}
?> 

	</div>
	<div class="clear" >
	</div>
</div>
	<div id="footer">
	&copy; www.sutel.com.br | Direitos Reservados
	<span class="credit"><a href="http://www.sutel.com.br">Sutel Facilities</a> Servi&ccedil;os Informacionais</span>

	</div>
</div>

	</body>
</html>
