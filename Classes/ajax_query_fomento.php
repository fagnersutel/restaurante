<?php
/**
 * @author Wellington Ribeiro
 * @version 1.0
 * @since 2010-02-09
 */

header('Content-type: text/html; charset=UTF-8');

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

?>a