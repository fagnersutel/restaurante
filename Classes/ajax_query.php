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

	$sql = "SELECT * FROM periodicos where locate('$q',tituloPeriodico) > 0 order by locate('$q',tituloPeriodico) limit 20";
	$r = mysql_query( $sql );
	if ( $r )
	{
	    echo '<ul>'."\n";
	    while( $l = mysql_fetch_array( $r ) )
	    {
		$p = $l['tituloPeriodico'];
                                    
		$p = preg_replace('/(' . $q . ')/i', '<span style="font-weight:bold;">$1</span>', $p);
		echo "\t".'<li codigoPeriodico="autocomplete_'.$l['codigoPeriodico'].'" rel="'.$l['codigoPeriodico'].'_' . $l['issnPeriodico'] . '">'. utf8_encode( $p ) .'</li>'."\n";
	    }
	    echo '</ul>';
	}
}

?>