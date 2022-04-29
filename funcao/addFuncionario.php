<?php 

    include('conexao.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $senha = md5($senha);

    if(!mysqli_query($conexao, "INSERT INTO funcionario (nome, email, senha) values ('$nome', '$email', '$senha')")){
        echo "Erro ao inserir";
    }else{
        echo "Salvo";
    }
    

?>