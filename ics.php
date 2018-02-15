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
        $codigoIc = $_POST['codigoIc'];
        $orientador = $_POST['orientador'];
        $nome = $_POST['nome'];
        $dtini = (implode('-', array_reverse(explode('/', $_POST['dtini']))));
        $dtfim = (implode('-', array_reverse(explode('/', $_POST['dtfim']))));
        ;
        $bolsa = $_POST['bolsa'];
        $projeto = $_POST['codigoPeriodico'];
        if (include_once '../Classes/dbconfig.php')
        {
            $db = $DB_con;
            $chave = $_GET['chave'];
        }
        else
        {
            echo 'Conexão não estabelecida....';
        }
        require_once('../Classes/IcsProf.class.php');

        //$conn = new Conexao(); //new instancia��o
        $ics = new IcsProf($db, $id, $nome, $dtini, $dtfim, $bolsa, $projeto, $orientador);
        
        if ($ics->insertIcs())
        {
            header('location: ics_tab.php');
        }
        

        break;
}
?>
