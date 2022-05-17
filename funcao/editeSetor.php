<?php 

    include('../seguranca/conexao.php');

    $rec=$_POST["id"];
    $nomeSetor = $_POST['nomeSetor'];
    $descricaoSetor = $_POST['descricaoSetor'];

    if(!mysqli_query($conexao, "UPDATE setor set nomeSetor='$nomeSetor', descricaoSetor='$descricaoSetor' where id=$rec")){
        header("location: ../errorPage.php");
    }else{
        header("location: ../setor/listaSetor.php");
    }

?>