<?php 

    include('conexao.php');

    $nomeSetor = $_POST['nomeSetor'];
    $descricaoSetor = $_POST['descricaoSetor'];

    if(!mysqli_query($conexao, "INSERT INTO setor (nomeSetor, descricaoSetor, status) values ('$nomeSetor', '$descricaoSetor', 1)")){
        echo "Erro ao inserir";
    }else{
        echo "Salvo";
    }

?>