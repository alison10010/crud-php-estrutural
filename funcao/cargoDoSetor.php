<?php
    include('conexao.php');

    //Recebe o id via ajax 
    $id = $_POST["setor"];

    // FAZER A REQUISIÇÃO AO BANCO DE DADOS USANDO A VARIÁVEL
    $seleciona = mysqli_query($conexao, "SELECT c.*, s.nomeSetor FROM cargo c LEFT JOIN setor AS s ON s.id=c.setor 
                                WHERE c.setor = '$id' ORDER BY c.id desc");
    $cargo = array();

    // CRIA A LISTA DE CARGOS JSON
    while($campo=mysqli_fetch_array($seleciona)){
        $cargo [] = array(
            'id'  => $campo['id'],
            'nomeCargo' => $campo['nomeCargo']
        );
    }

    // RETORNA A LISTA DE CARGO EM JSON
    echo json_encode($cargo);
?>
