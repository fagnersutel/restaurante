<?php
//local
$DB_host = "localhost";
$DB_user = "root";
$DB_pass = "root";
$DB_name = "restaurante";

//server
/*
$DB_host = "mysql.sutel.com.br";
$DB_user = "fagnersutel";
$DB_pass = "tomze1433";
$DB_name = "restaurantepoa";
*/

try
{
	$DB_con = new PDO("mysql:host={$DB_host};dbname={$DB_name}",$DB_user,$DB_pass);
	$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
	echo $e->getMessage();
}



?>