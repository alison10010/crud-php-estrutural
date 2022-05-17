<?php 
	session_start(); 
	if ($_SESSION["logado"] != "1"){  // VERIFICA SE O USER TÁ LOGADO (1)
		session_destroy();
		header("location: ../index.php");
	}else{		
	}

?>
