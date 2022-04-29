<?php 

    include('conexao.php');

    $nomeSetor = $_POST['nomeSetor'];
    $quantidadeFun = $_POST['quantidadeFun'];
    $descricaoSetor = $_POST['descricaoSetor'];

    if(!mysqli_query($conexao, "INSERT INTO setor (nomeSetor, quantidadeFun, descricaoSetor) values ('$nomeSetor', '$quantidadeFun', '$descricaoSetor')")){
        echo "Erro ao inserir";
    }else{
        echo "Salvo";
    }
    

?>