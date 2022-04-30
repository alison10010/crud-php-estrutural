<?php include("../template/inicioPage.php");  ?>

<!-- BUSCA OS DADOS NO BD DE ACORDO COM O ID DO CARGO PASSADO-->
<?php
  $rec = $_GET["editaid"];/* BUSCA NA TABELA RELACIONADA (SETOR) PELO ID INFORMADO NO CAMPO "SETOR" DA TABELA CARGO  */
  $seleciona = mysqli_query($conexao, "SELECT c.*, 
  s.nomeSetor FROM cargo c LEFT JOIN setor AS s ON s.id=c.setor where c.id=$rec");
  $campo = mysqli_fetch_array($seleciona);
?>

<div class="container">
  <h3>Edição de Cargo</h3>
  <p>Verifique os dados antes de editar o Cargo.</p>
  <br />
  <div id="form">
    <form action="../funcao/editeCargo.php" method="post">
        <input type="hidden" name="id" value="<?=$campo["id"]?>">
        <div class="form-group">
            <label for="nomeCargo">Nome do Cargo:</label>
            <input type="txt" class="form-control" id="nomeCargo" name="nomeCargo" value="<?=$campo["nomeCargo"]?>" required>
        </div>

        <div class="form-group">
            <label for="descricaoCargo">Descricao do Cargo:</label>
            <input type="txt" class="form-control" id="descricaoCargo" name="descricaoCargo" value="<?=$campo["descricaoCargo"]?>" required>
        </div>

        <div class="form-group">
              <label for="setor">Setor Pertencente:</label>
              <select name="setor" class="form-control" required>
               <option value="<?php echo $campo['setor'] ?>"><?php echo $campo['nomeSetor'] ?></option>
               <?php
                  $seleciona = mysqli_query($conexao, "SELECT * FROM setor where status = 1 ORDER BY id desc");
                  while($campo=mysqli_fetch_array($seleciona)){
                ?>
                <option value="<?php echo $campo['id'] ?>"><?php echo $campo['nomeSetor'] ?></option>
              <?php } ?> 
            </select> 
        </div>
        
        <button type="submit" class="btn btn-primary">Concluir Edição</button>
        <a type="button" class="btn btn-info btn-md" href="listaCargo.php">Cancelar</button></a> 
    </form>
  </div>
</div>

<?php include("../template/fimPage.php"); ?>

