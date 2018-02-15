<?php

ob_start();
require_once("validasessao.php");

if (isset($_GET['acao']))
{
    //echo "acao recebida<br>";
    $acao = $_GET['acao']; // variavel acao � enviada por get do m�todo listarartigosde artigos.class.php ou n�o tem valor algum qdo vem diretamente em resposta ao action do formulario de areas-f.php
    //echo $acao;	
}

switch ($acao)
{  // switch= mudar ou trocar
    case 0 : // inclus�o
        $orientador = $_POST['orientador'];
        $projeto = $_POST['codigoPeriodico'];

        if (include_once '../Classes/dbconfig.php')
        {
            $db = $DB_con;
        }
        else
        {
            echo 'Conexão não estabelecida....';
        }
        require_once('../Classes/MelhorArtigo.class.php');
        $mar = new MelhorArtigo($db, $idmars, $valor, $ics, $dtini, $dtfim, $projeto, $orientador, $moeda);
        
        if ($mar->insertMelhorArtigo())
        {
            header('location: sucesso.php');
        }
        

        break;
}
?>
