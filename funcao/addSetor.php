<?php 

    include('conexao.php');

    $nomeSetor = $_POST['nomeSetor'];
    $descricaoSetor = $_POST['descricaoSetor'];

    if(!mysqli_query($conexao, "INSERT INTO setor (nomeSetor, descricaoSetor, status) values ('$nomeSetor', '$descricaoSetor', 1)")){
        header("location: ../errorPage.php");
    }else{
        header("location: ../setor/listaSetor.php");
    }

?>