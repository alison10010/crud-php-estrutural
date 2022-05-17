
<!-- CONEXAO COM O BANCO DE DADOS PARA TODAS AS SQL -->
<?php 
include("../seguranca/conexao.php"); 
include("../seguranca/verificaLogin.php"); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Teste</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/estilo.css">

  <!-- MASCARA PARA INPUT E JQUERY DA PAGE -->
  <script src="../js/jquery-3.6.0.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="../js/jquery.maskedinput.js" type="text/javascript"></script>
  <script src="../js/camposMascaras.js" type="text/javascript"></script>
  
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <img  class="navbar-brand" src="../img/logo.png" style="margin-left: -15px;padding: 0px 10px;">
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Inicio</a></li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Funcionario <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../funcionario/cadastroFunc.php">Cadastrar</a></li>
          <li><a href="../funcionario/listaFunc.php">Listar</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Setor <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../setor/cadastroSetor.php">Cadastrar</a></li>
          <li><a href="../setor/listaSetor.php">Listar</a></li>
        </ul>
      </li>

      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Cargo <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="../cargo/cadastroCargo.php">Cadastrar</a></li>
          <li><a href="../cargo/listaCargo.php">Listar</a></li>
        </ul>
      </li>

      <li><a href="#">Relatorio</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="../seguranca/logoff.php"><span class="glyphicon glyphicon-log-out"></span> Sair</a></li>
    </ul>
  </div>
</nav>