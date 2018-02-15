<?php
/*
=============================================================
programa: logoff.php
fun��o: fazer a desconexao com o sistema
data: 
autor: Alexandre Faccioni Barcellos 
supervisao: Docente: Alexandre Faccioni Barcellos - Senac informatica
=============================================================
*/
	session_start();

	unset($_SESSION['id']);	// elimina a sess�o
	unset($_SESSION['nome']);
	unset($_SESSION['mail']);

	header("Location: acesso.php");
?>