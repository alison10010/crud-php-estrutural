<?php 
    /* APENAS ALTERA O STATUS DE ATIVO(1) PARA INATIVO(0) */
    include('../seguranca/conexao.php');

    $rec=$_POST["id"];

    if(!mysqli_query($conexao, "UPDATE funcionario set status = 0 where id=$rec")){
        header("location: ../errorPage.php");
    }else{
        header("location: ../funcionario/listaFunc.php");
    }

?>