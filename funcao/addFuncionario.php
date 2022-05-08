<?php 
    /* CADASTRA COM STATUS DE ATIVO(1) */
    include('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $setor = $_POST['setor'];
    $cargo = $_POST['cargo'];
  
    if(!mysqli_query($conexao, "INSERT INTO funcionario (nome, email, cpf, setor, cargo, status) values ('$nome', '$email', '$cpf', '$setor', '$cargo', 1)")){
        header("location: ../errorPage.php");
    }else{
        header("location: ../funcionario/listaFunc.php");
    }

?>

