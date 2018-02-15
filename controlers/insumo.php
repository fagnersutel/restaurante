<?php
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}
switch ($acao){
    
    case 0: 
        try {
            
            $codigoIten     = utf8_decode($_POST['$codigoIten']);
            $um     = utf8_decode($_POST['insumo']);
            $dois   = utf8_decode($_POST['codunid']);
            $tres   = utf8_decode($_POST['tres']);
            $quatro = utf8_decode($_POST['quatro']);
            $cinco  = utf8_decode($_POST['cinco']);
            $seis   = utf8_decode($_POST['seis']);
            $sete   = utf8_decode($_POST['sete']);
            $oito   = utf8_decode($_POST['oito']);
            $nove   = utf8_decode($_POST['nove']);
            $dez   = utf8_decode($_POST['dez']);
            
            $for = new Insumo($db, $codigoIten, $um, $dois, $tres, $nomeItem4, $nomeItem5, $nomeItem6, $nomeItem7, $nomeItem8, $nomeItem9, $nomeItem10);
            
            $for->incluirInsumo();
            $inserido = $for->getcodigoIten();
            
        } catch (Exception $exc) {
            header('location: principal.php?pag=falha.php&erro='.$exc->getTraceAsString());
        } 
        header('location: insumos.php?acao=2                                                   &chave='.$inserido.'');
        
        break;
    
    case 1:
        try {
            $codigoIten = $_GET['chave'];
            
            $for = new Insumo($db, $codigoIten, $um, $dois, $tres, $nomeItem4, $nomeItem5, $nomeItem6, $nomeItem7, $nomeItem8, $nomeItem9, $nomeItem10);
            $for->buscarInsumo();
            sleep(1);
            header('location: insumosteste.php'); 
        } catch (Exception $exc) {
            header('location: principal.php?pag=falha.php&erro='.$exc->getTraceAsString());
        }
        break;
    case 2:
        try {
            $for = new Insumo($db, $codigoIten, $um, $dois, $tres, $nomeItem4, $nomeItem5, $nomeItem6, $nomeItem7, $nomeItem8, $nomeItem9, $nomeItem10);
            $for->listarInsumos();
            header('location: insumos_tab.php'); 
            //echo 'acao 2';
        } catch (Exception $exc) {
            header('location: principal.php?pag=falha.php&erro='.$exc->getTraceAsString());
        }
        break;
   
}
