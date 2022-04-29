<?php include("../template/inicioPage.php");  ?>

<div class="container">
  <h3>Cadastro de Setor</h3>
  <p>Verifique os dados antes de cadastrar o novo Setor.</p>

  <br />
  <div id="form">
    <form action="../funcao/addSetor.php" method="post">
        <div class="form-group">
            <label for="nomeSetor">Nome do Setor:</label>
            <input type="txt" class="form-control" id="nomeSetor" name="nomeSetor" required>
        </div>
        <div class="form-group">
            <label for="descricaoSetor">Descricao do Setor:</label>
            <input type="txt" class="form-control" id="descricaoSetor" name="descricaoSetor" required>
        </div>

        <button type="submit" class="btn btn-default">Cadastrar</button>
    </form>
  </div>
</div>

<?php include("../template/fimPage.php"); ?>

