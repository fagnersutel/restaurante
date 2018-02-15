<?php


header('Content-type: text/html; charset=UTF-8');
/*
include_once("Conexao.class.php");
$conn 	= new Conexao();	//new instancia��o

if( isset( $_REQUEST['query'] ) && $_REQUEST['query'] != "" )
{
    $q = mysql_real_escape_string( $_REQUEST['query'] );

	$sql = "SELECT * FROM fomentador where locate('$q',fomentador_desc) > 0 order by locate('$q',fomentador_desc) limit 20";
	$r = mysql_query( $sql );
	if ( $r )
	{
	    echo '<ul>'."\n";
	    while( $l = mysql_fetch_array( $r ) )
	    {
		$p = $l['fomentador_desc'];
                                    $f = utf8_encode($l['fomentador_pais']);    
		$p = preg_replace('/(' . $q . ')/i', '<span style="font-weight:bold;">$1</span>', $p);
		echo "\t".'<li idfomentador="autocomplete_'.$l['idfomentador'].'" rel="'.$l['idfomentador'].'_' . $f . '">'. utf8_encode( $p ) .'</li>'."\n";
	    }
	    echo '</ul>';
	}
}
*/
/*3#######*/
include_once 'dbconfig.php';
$db = $DB_con;
if( isset( $_REQUEST['query'] ) && $_REQUEST['query'] != "" ){

    $att = $db->prepare('SELECT * FROM fomentador WHERE LOCATE(?,fomentador_desc) > 0 ORDER BY fomentador_desc LIMIT 25');
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