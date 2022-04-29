<?php include("inicioPage.php");  ?>

<div class="container">
  <h3>Login</h3>

  <br />
  <div id="form">
    <form action="/action_page.php">
        <div class="form-group">
            <label for="email">Usuario:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group">
            <label for="pwd">Senha de acesso:</label>
            <input type="password" class="form-control" id="senha" name="senha">
        </div>

        <button type="submit" class="btn btn-default">Cadastrar</button>
    </form>
  </div>
</div>

<?php include("fimPage.php"); ?>

