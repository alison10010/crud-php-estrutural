<?php 
    /* CADASTRA COM STATUS DE ATIVO(1) */
    include('conexao.php');

    $nomeCargo = $_POST['nomeCargo'];
    $setor = $_POST['setor'];
    $descricaoCargo = $_POST['descricaoCargo'];

    if(!mysqli_query($conexao, "INSERT INTO cargo (nomeCargo, setor, descricaoCargo, status) values ('$nomeCargo', '$setor', '$descricaoCargo', 1)")){
        header("location: ../errorPage.php");
    }else{
        header("location: ../cargo/listaCargo.php");
    }

?>
