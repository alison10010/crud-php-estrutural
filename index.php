<!-- UM LAYOUT PADRÃO BOOTSTRAP COM MENUS PARA ORGANIZAR OS FORMULARIOS -->
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Pratica</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<!--  MENU DA PAGE ANTES DE LOGAR -->
<nav class="navbar navbar-inverse">
  <div class="container-fluid">    
  <div class="navbar-header">
      <img  class="navbar-brand" src="img/logo.png" style="margin-left: -15px;padding: 0px 10px;">
    </div>
    <ul class="nav navbar-nav">
      <li><a href="#">Funcionario</a></li>
      <li><a href="#">Setor</a></li>
      <li><a href="#">Cargo</a></li>
      <li><a href="#">Relatorio</a></li>
    </ul>
  </div>
</nav>

  <br />
  <div id="form" class="container h-100" style="width: 40%;">
    <center><h3>Login</h3></center>
    <br />
    <form action="seguranca/login.php" method="post">
        <div class="form-group">
            <label for="email">Usuario:</label>
            <input type="txt" class="form-control" id="email" name="usuario">
        </div>
        <div class="form-group">
            <label for="pwd">Senha de acesso:</label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>
        <button type="submit" class="btn btn-success">Acessar</button>
    </form>
  </div>

<br />
</body>
</html>

