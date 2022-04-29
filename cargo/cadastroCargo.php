<?php include("../template/inicioPage.php");  ?>

<div class="container">
  <h3>Cadastro de Cargo</h3>
  <p>Verifique os dados antes de cadastrar o novo Cargo.</p>

  <br />
  <div id="form">
    <form action="../funcao/addCargo.php" method="post">
        <div class="form-group">
            <label for="nomeCargo">Nome do Cargo:</label>
            <input type="txt" class="form-control" id="nomeCargo" name="nomeCargo" required>
        </div>
        <div class="form-group">
            <label for="descricaoCargo">Descricao do Cargo:</label>
            <input type="txt" class="form-control" id="descricaoCargo" name="descricaoCargo" required>
        </div>

        <button type="submit" class="btn btn-default">Cadastrar</button>
    </form>
  </div>
</div>

<?php include("../template/fimPage.php"); ?>

