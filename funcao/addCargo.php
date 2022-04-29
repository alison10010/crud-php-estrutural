<?php 
    /* CADASTRA COM STATUS DE ATIVO(1) */
    include('conexao.php');

    $nomeCargo = $_POST['nomeCargo'];
    $descricaoCargo = $_POST['descricaoCargo'];

    if(!mysqli_query($conexao, "INSERT INTO cargo (nomeCargo, descricaoCargo, status) values ('$nomeCargo', '$descricaoCargo', 1)")){
        header("location: ../errorPage.php");
    }else{
        header("location: ../cargo/listaCargo.php");
    }

?>