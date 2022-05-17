<?php 
	
session_start(); // INICIAR A SESSAO
session_destroy(); // DESTROI A SESSAO
unset($_SESSION); // LIMPA AS VARIAVES DA SESSAO

header("location: ../index.php");

?>
