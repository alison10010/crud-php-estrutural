<?php include("../template/inicioPage.php");  ?>

<div class="container">
  <h3>Cadastro de Funcionário</h3>
  <p>Verifique os dados antes de cadastrar o novo Funcionário.</p>

  <br />
  <div id="form">
    <form action="../funcao/addFuncionario.php" method="post">
        <div class="form-group">
            <label for="nomeFuncionario">Nome do Funcionario:</label>
            <input type="txt" class="form-control" id="nomeFuncionario" name="nomeFuncionario" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="number" class="form-control" id="cpf" name="cpf" required>
        </div>

        <button type="submit" class="btn btn-default">Cadastrar</button>
    </form>
  </div>
</div>

<?php include("../template/fimPage.php"); ?>

