<?php  
// logout do usuário e redimencionado ele para a pagina de login
	session_start();
	session_unset();
	session_destroy();
	header('Location: login.php');

?>