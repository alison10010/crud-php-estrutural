<?php 

    include('conexao.php');

    $rec=$_POST["id"];
    $nomeCargo = $_POST['nomeCargo'];
    $descricaoCargo = $_POST['descricaoCargo'];

    if(!mysqli_query($conexao, "UPDATE cargo set nomeCargo='$nomeCargo', descricaoCargo='$descricaoCargo' where id=$rec")){
        header("location: ../errorPage.php");
    }else{
        header("location: ../cargo/listaCargo.php");
    }

?>