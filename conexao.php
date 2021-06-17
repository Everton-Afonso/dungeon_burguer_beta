<?php  
// criando a conexao com o bd
	$connect = mysqli_connect('localhost', 'root', '') or trigger_error(mysql_error(),E_USER_ERROR);
	$db = mysqli_select_db($connect,'dungeon-burguer');

?>