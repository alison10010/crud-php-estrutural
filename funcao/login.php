<?php 

    include("conexao.php");

    session_start();

    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = md5($senha);

    $sql = mysqli_query($conexao, "SELECT * FROM usuario WHERE email = '$email' and senha = '$senha'");
    $db = mysqli_fetch_assoc($sql);

    if(!empty($db)){
        $_SESSION['login'] = "1";
        $_SESSION['usuario'] = $db['usuario'];
        $_SESSION['email'] = $db['email'];
        header('location: painel.php');
    }else{
        session_destroy();
        header('location: index.php');
    }
?>