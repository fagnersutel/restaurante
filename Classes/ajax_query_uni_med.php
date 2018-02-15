<?php
header('Content-type: text/html; charset=UTF-8');
include_once 'dbconfig.php';
$db = $DB_con;
if( isset( $_REQUEST['query'] ) && $_REQUEST['query'] != "" ){

    $att = $db->prepare('SELECT c.idunidade_de_medida, c.unidade_de_medida_desc, c.unidade_de_medida_cod FROM unidade_de_medida c WHERE LOCATE(?,unidade_de_medida_desc) > 0  ORDER BY unidade_de_medida_desc LIMIT 25');
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