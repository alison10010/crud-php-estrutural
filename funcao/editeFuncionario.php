<?php 
    /* GRAVA EDICAO NO BD */
    include('../seguranca/conexao.php');

    $rec=$_POST["id"];
    $nome = $_POST['nome'];
    $nome = strtoupper($nome); // TORNA MAIUSCULA
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $setor = $_POST['setor'];
    $cargo = $_POST['cargo'];

    if(!mysqli_query($conexao, "UPDATE funcionario set nome ='$nome', email='$email', cpf='$cpf', setor='$setor', cargo='$cargo' where id=$rec")){
        header("location: ../errorPage.php");
    }else{
       header("location: ../funcionario/listaFunc.php");
    }

?>