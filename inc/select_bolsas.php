<?php


require_once "../Classes/dbconfig.php";
include_once '../Classes/Bolsas.class.php';
$bolsa = new Bolsas($db, $codigoIten, $nomeItem1, $nomeItem2, $nomeItem3, $nomeItem4, $nomeItem5, $nomeItem6, $nomeItem7, $nomeItem8, $nomeItem9, $nomeItem10, $nomeItem11);
$bolsa->listarBolsas();


?>
