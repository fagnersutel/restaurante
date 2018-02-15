<?php

ob_start(); //
/*
  =============================================================
  programa: validasessao.php
  fun��o: verificar acessos indevidos ao sistema
  data:
  autor: Alexandre Faccioni Barcellos
  supervisao: Docente: Alexandre Faccioni Barcellos - Senac informatica
  =============================================================
 */
session_start();
if ((!isset($_SESSION['id'])) or ( !isset($_SESSION['nome'])) or ( !isset($_SESSION['mail'])))
{
       header('Location: erro.php'); // formul�rio de erro de login
}

//executa consulta no banco de dados para montar a exibi��o da consulta.
    $selec = ($_SESSION['mail']);
    include_once('Classes/dbconfig.php');
    $db = $DB_con;
    $att = $db->prepare('SELECT * FROM usuarios au WHERE au.usuarios_nome = ? AND au.nivel_usuario_idnivel_usuario = 3');
    $att->bindParam(1, $_SESSION['nome']);
    //$att->execute();
    if ($att->execute()) {
        $row = (int) $att->rowCount();
            if ($row === 1) {
                
            } else {
               //echo 'SELECT * FROM autores au WHERE au.autores_email = '.$selec.' AND au.codigoPapel = 1';
                header('Location: acesso.php');
            }
    }
        
?>
        