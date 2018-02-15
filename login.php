<?php
ob_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
</html>
<?php
foreach ($_POST as $idx => $vlr)
{
    if ($vlr == '')
    {
        $erro [] = "<br>" . ucfirst($idx) . "<b> Não informado, favor corrigir!</b>";  //ucfirst tras a primeira vari�vel da string em maiuscula.
    }
}
if (sizeof($erro) <> 0)
{ //sizeof comando para verificar tamanho do campo.
    echo "<table align=\"center\">";
    echo "<tr>";
    echo "<td bgcolor=\"#00FFFF\">ERRO DE ACESSO</td>";
    echo "<td bgcolor=\"#00CDCD\"><img src=\"./imagens/erro.bmp\" width=\"auto\" height=\"auto\"></td>";

    foreach ($erro as $vlr)
    { //foreach = paracada
        echo "<tr><td>$vlr</td></tr>";
    }
    echo "</tr>";
    echo "<tr><td colspan=\'2\' align=\"right\">realizar novamente o <a href=\"index.php\">Login</td></tr>";
    echo "</table>";
    exit;
}
if (include_once("Classes/dbconfig.php"))
{
    
}
else
{
    echo '<p>NAO carregou a classe de conexao</p>';
}
$username = addslashes(htmlentities($_POST['login'])); //addslashes e htmlentities = fun��es de seguran�a
$password = addslashes(htmlentities($_POST['senha']));
$password = md5($password);
//echo $username . "<p>";
//echo $password . "<p>";

$db = $DB_con;

    $att = $db->prepare('SELECT * FROM 	usuarios au WHERE au.usuarios_nome = ? AND au.	usuarios_senha =?');
    $att->bindParam(1, $username);
    $att->bindParam(2, $password);
    
    if ($att->execute()) {
        $att->bindColumn(1, $ide);
        $att->bindColumn(2, $nom);
        
        $row = (int) $att->rowCount();
            if ($row === 1) {
                $user = $att->fetch();
                
                echo $codigoUsuario  = $user['idusuarios'];  
                echo $nomeUsuario    = $user['usuarios_nome'];
                echo $estatusUsuario = $user['nivel_usuario_idnivel_usuario'];
                echo $emailUsuario = $user['usuarios_email'];
                $lifetime=3600;
                session_set_cookie_params($lifetime);
                session_start();        
                $_SESSION['id']         = $codigoUsuario;   
                $_SESSION['nome']       = $nomeUsuario;     
                $_SESSION['mail']       = $emailUsuario;     
                setcookie("Usuario", $nomeUsuario); 
             
                header('Location: index.php');
              
            } else {
                setcookie("errorCookie", 'Login Invalido');
                header('Location: erro.php'); 
                exit;
            }

    } else {
        setcookie("errorCookie", 'Login Invalido');
        header('Location: erro.php'); // formul�rio de erro de login
        exit;
    }
    
?>
