<?php
header('Content-type: text/html; charset=UTF-8');
include_once 'dbconfig.php';
$db = $DB_con;
if( isset( $_REQUEST['query'] ) && $_REQUEST['query'] != "" ){

    $att = $db->prepare('SELECT c.idCidade, c.CidadeDesc, e.EstadoDesc FROM Cidade c, Estado e WHERE LOCATE(?,CidadeDesc) > 0 AND c.Estado_idEstado = e.idEstado ORDER BY CidadeDesc LIMIT 25');
    $att->bindParam(1, $_REQUEST['query']);
    $att->execute();
    $att->bindColumn(1, $ide);
    $att->bindColumn(2, $nom);
    $att->bindColumn(3, $cpf);
    $row = $att->rowCount();
    if ($row > 0)
    {
        echo '<ul>'."\n";
        while($att->fetch(PDO::FETCH_BOUND)){ 
           $p = $nom; 
           $p = preg_replace('/(' . $a . ')/i', '<span style="font-weight:bold;">$1</span>', $p);
           echo "\t".'<li codigoSinal="autocomplete_'.$ide.'" rel="'.$ide.'_' . $cpf. '">'. utf8_encode( $p ) .'</li>'."\n";
        }
        echo '</ul>';
    }
}

?>