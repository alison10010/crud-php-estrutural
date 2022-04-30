<?php include("../template/inicioPage.php");  ?>

<!-- BUSCA OS DADOS NO BD DE ACORDO COM O ID DO CARGO PASSADO -->
<?php
  $rec = $_GET["editaid"];
  
  $seleciona = mysqli_query($conexao, "SELECT * FROM cargo where id=$rec");
  $campo = mysqli_fetch_array($seleciona);
?>

<div class="container">
  <h3 style="color: red">Exclução de Cargo</h3>
  <p>Verifique os dados antes de excluir o Cargo.</p>

  <br />
  <div id="form">
    <form action="../funcao/excluiCargo.php" method="post">
        <input type="hidden" name="id" value="<?=$campo["id"]?>">
        <div class="form-group">
            <label for="nomeCargo">Nome do Cargo:</label>
            <input type="txt" class="form-control" id="nomeCargo" name="nomeCargo" value="<?=$campo["nomeCargo"]?>" required>
        </div>
        <div class="form-group">
            <label for="descricaoCargo">Descricao do Cargo:</label>
            <input type="txt" class="form-control" id="descricaoCargo" name="descricaoCargo" value="<?=$campo["descricaoCargo"]?>" required>
        </div>
        
        <button type="submit" class="btn btn-danger">Excluir cargo</button>
        <a type="button" class="btn btn-info btn-md" href="listaCargo.php">Cancelar</button></a> 
    </form>
  </div>
</div>

<?php include("../template/fimPage.php"); ?>

