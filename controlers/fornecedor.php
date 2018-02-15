<?php
if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}
switch ($acao){
    
    case 0: 
        try {
            $codigoIten     = utf8_decode($_POST['$codigoIten']);
            $um     = utf8_decode($_POST['razaosocial']);
            $dois   = utf8_decode($_POST['cpfcnpj']);
            $tres   = utf8_decode($_POST['codigocidade']);
            $quatro = utf8_decode($_POST['quatro']);
            $cinco  = utf8_decode($_POST['cinco']);
            $seis   = utf8_decode($_POST['seis']);
            $sete   = utf8_decode($_POST['sete']);
            $oito   = utf8_decode($_POST['oito']);
            $nove   = utf8_decode($_POST['nove']);
            $dez   = utf8_decode($_POST['dez']);
            
            
;            $for = new Fornecedor($db, $codigoIten, $um, $dois, $tres, $nomeItem4, $nomeItem5, $nomeItem6, $nomeItem7, $nomeItem8, $nomeItem9, $nomeItem10);
            //echo $fab->inserirEnderecos($um, $dois, $tres, $quatro, $id, $nm, $cl, $tp, $tb);
            $for->incluirFornecedor();
            $inserido = $for->getcodigoIten();
        } catch (Exception $exc) {
            header('location: principal.php?pag=falha.php&erro='.$exc->getTraceAsString());
        } 
        header('location: fornecedores.php?acao=1&chave='.$inserido.'');
        
        break;
    
    case 1:
        try {
            $codigoIten = $_GET['chave'];
            
            $for = new Fornecedor($db, $codigoIten, $um, $dois, $tres, $nomeItem4, $nomeItem5, $nomeItem6, $nomeItem7, $nomeItem8, $nomeItem9, $nomeItem10);
            $for->buscarFornecedor();
            sleep(1);
            header('location: fornecedorteste.php'); 
        } catch (Exception $exc) {
            header('location: principal.php?pag=falha.php&erro='.$exc->getTraceAsString());
        }
        break;
    case 2:
        try {
            $for = new Fornecedor($db, $codigoIten, $um, $dois, $tres, $nomeItem4, $nomeItem5, $nomeItem6, $nomeItem7, $nomeItem8, $nomeItem9, $nomeItem10);
            $for->listarFornecedores();
            //header('location: fornecedorteste.php'); 
            //echo 'acao 2';
        } catch (Exception $exc) {
            header('location: principal.php?pag=falha.php&erro='.$exc->getTraceAsString());
        }
        break;
    case 3:
        try {
            $param = $_GET['cli'];
            require_once './Classes/Enderecos.class.php';
            $fab = new Enderecos($db, $um, $dois, $tres, $quatro, $cinco, $seis, $sete, $oito, $nove);
            $fab->alterarEnderecosSelec($param);
    
            //header('location: principal.php?pag=pessoa-ca.php&chave='.$tres.'');
            
        } catch (Exception $exc) {
            header('location: principal.php?pag=falha.php&erro='.$exc->getTraceAsString());
        }
        break;
    case 4:
        try {
            $um = $_GET['chave'];
            include_once('./Classes/dbconfig.php');
            $db = $DB_con;
            require_once './Classes/Enderecos.class.php';
            $fab = new Enderecos($db, $um, $dois, $tres, $quatro, $cinco, $seis, $sete, $oito, $nove);
            $fab->alterarEnderecosEdit($um);
            
            header('location: principal.php?pag=enderecos-f.php');
            
            
        } catch (Exception $exc) {
            header('location: principal.php?pag=falha.php&erro='.$exc->getTraceAsString());
        }
        break;
        break;
    case 5:
        try {
            $um     = utf8_decode($_POST['um']);
            $dois   = utf8_decode($_POST['dois']);
            $tres   = utf8_decode($_POST['tres']);
            $quatro = utf8_decode($_POST['quatro']);
            $cinco  = utf8_decode($_POST['cinco']);
            $seis   = utf8_decode($_POST['seis']);
            $sete   = utf8_decode($_POST['sete']);
            $oito   = utf8_decode($_POST['oito']);
            $nove   = utf8_decode($_POST['nove']);
                        
            include_once('./Classes/dbconfig.php');
            $db = $DB_con;
            require_once './Classes/Enderecos.class.php';
            $fab = new Enderecos($db, $um, $dois, $tres, $quatro, $cinco, $seis, $sete, $oito, $nove);
            $fab->alterarEndereco();
            var_dump($fab);
            
            header('location: principal.php?pag=pessoa-ca.php&chave='.$seis.'');
            
            
        } catch (Exception $exc) {
            header('location: principal.php?pag=falha.php&erro='.$exc->getTraceAsString());
        }
        break;
}
