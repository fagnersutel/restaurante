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
        $usuario = $_POST['usuario'];
        $passw = $_POST['passw'];
        $newpassw = $_POST['newpassw'];
        $renewpassw = $_POST['renewpassw'];
        if (include_once '../Classes/dbconfig.php')
        {
            $db = $DB_con;
            $chave = $_GET['chave'];
        }
        else
        {
            echo 'Conexão não estabelecida....';
        }
        require_once('../Classes/Passw.class.php');
        //$conn = new Conexao(); //new instancia��o
        $ics = new Passw($db, $id, $usuario, $passw, $newpassw, $renewpassw);
        if ($newpassw == $renewpassw)
        {
            if ($ics->UpdatePassw())
            {
                echo "<br>" . $ics->getUser();
                echo "<br>" . $ics->getPassw();
                echo "<br>" . $ics->getNewpassw();
                echo "<br>" . $ics->getRenewpassw();
                //header('location: acesso.php');
            }
        }        else
        {
            header('location :erro.php');
        }

        break;
}
?>
