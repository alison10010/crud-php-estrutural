<?php 
    /* GRAVA EDICAO NO BD */
    include('../seguranca/conexao.php');

    $rec=$_POST["id"];
    $nomeCargo = $_POST['nomeCargo'];
    $descricaoCargo = $_POST['descricaoCargo'];
    $setor = $_POST['setor'];

    if(!mysqli_query($conexao, "UPDATE cargo set nomeCargo='$nomeCargo', descricaoCargo='$descricaoCargo', setor='$setor' where id=$rec")){
        header("location: ../errorPage.php");
    }else{
        header("location: ../cargo/listaCargo.php");
    }

?>