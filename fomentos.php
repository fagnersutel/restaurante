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
        $codigo = $_POST['idfomentos'];
        $valor = $_POST['valor'];
        $orientador = $_POST['orientador'];
        $ics = $_POST['ics'];
        $dtini = (implode('-', array_reverse(explode('/', $_POST['dtini']))));
        $dtfim = (implode('-', array_reverse(explode('/', $_POST['dtfim']))));
        $moeda = $_POST['moeda'];
        $projeto = $_POST['codigoPeriodico'];

        if (include_once '../Classes/dbconfig.php')
        {
            $db = $DB_con;
        }
        else
        {
            echo 'Conexão não estabelecida....';
        }
        require_once('../Classes/FomentoProf.class.php');
        $fomento = new FomentoProf($db, $idfomentos, $valor, $ics, $dtini, $dtfim, $projeto, $orientador, $moeda);
        
        if ($fomento->insertFomento())
        {
            header('location: fomentos_tab.php');
        }
        

        break;
}
?>
