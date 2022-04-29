<?php include("../template-sub-pasta/inicioPage.php");  ?>

<!-- BUSCA OS DADOS NO BD DE ACORDO COM O ID -->
<?php
  include("../funcao/conexao.php");
  $rec = $_GET["editaid"];

  $seleciona = mysqli_query($conexao, "SELECT * FROM setor where id=$rec");
  $campo = mysqli_fetch_array($seleciona);
?>

<div class="container">
  <h3>Edição de Setor</h3>
  <p>Verifique os dados antes de editar o Setor.</p>

  <br />
  <div id="form">
    <form action="../funcao/aditarSetor.php" method="post">
        <input type="hidden" name="id" value="<?=$campo["id"]?>">
        <div class="form-group">
            <label for="editeNomeSetor">Nome do Setor:</label>
            <input type="txt" class="form-control" id="editeNomeSetor" name="editeNomeSetor" value="<?=$campo["nomeSetor"]?>" required>
        </div>
        <div class="form-group">
            <label for="editeDescricaoSetor">Descricao do Setor:</label>
            <input type="txt" class="form-control" id="editeDescricaoSetor" name="editeDescricaoSetor" value="<?=$campo["descricaoSetor"]?>" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Concluir Edição</button>
        <a type="button" class="btn btn-info btn-md" href="listaSetor.php">Cancelar</button></a> 
    </form>
  </div>
</div>

<?php include("../template-sub-pasta/fimPage.php"); ?>

