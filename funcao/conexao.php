<?php 

    $conexao = mysqli_connect("localhost", "root", "", "teste");

    if(!$conexao){
        header('location: ../errorPage.php');
    }else{        
    }
?>