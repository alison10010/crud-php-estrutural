<?php 

    include("conexao.php");

    $usuario = $_POST['usuario'];
    $senha = $_POST['senha'];
    $senha = md5($senha);

    $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE usuario = '$usuario' and senha = '$senha'");
    $db = mysqli_fetch_assoc($sql);

    // CRIA SESSAO PARA USAR O SISTEMA
    if(!empty($db)){
        session_start();
        $_SESSION['logado'] = "1";
        $_SESSION['usuario'] = $db['usuario'];
        header('location: ../funcionario/listaFunc.php');
    }else{
        session_destroy();
        $_SESSION['logado'] = "0";
        header('location: ../index.php');
    }
?>
