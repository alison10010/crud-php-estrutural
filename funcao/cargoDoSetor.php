<?php
    include('../seguranca/conexao.php');

    //Recebe o id via ajax 
    $id = $_POST["setor"];

    // FAZER A REQUISIÇÃO AO BANCO DE DADOS USANDO A VARIÁVEL
    $seleciona = mysqli_query($conexao, "SELECT * FROM cargo WHERE setor = '$id' ORDER BY nomeCargo ASC");
    $cargo = array();

    // CRIA A LISTA DE CARGOS
    while($campo=mysqli_fetch_array($seleciona)){
        $cargo [] = array(
            'id'  => $campo['id'],
            'nomeCargo' => $campo['nomeCargo']
        );
    }

    // RETORNA A LISTA DE CARGO EM JSON
    echo json_encode($cargo);
?>
