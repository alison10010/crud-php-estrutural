<?php include("../template/inicioPage.php");  ?>

<!-- BUSCA OS DADOS NO BD DE ACORDO COM O ID DO CARGO PASSADO-->
<?php
  $rec = $_GET["editaid"];            /* BUSCA NA TABELA RELACIONADA PELO ID INFORMADO NO CAMPO "SETOR" E "CARGO" DE TABELAS ESTRAGEIRA */
  $seleciona = mysqli_query($conexao, "SELECT f.*, s.nomeSetor, c.nomeCargo FROM funcionario AS f /* PEGANDO APENAS 'nomeSetor' E 'nomeCargo' DE TABELA ESTRANGEIRA */
                                       INNER JOIN setor AS s ON s.id = f.setor
                                       INNER JOIN cargo AS c ON c.id = f.cargo where f.id=$rec");                                                   
  $campo = mysqli_fetch_array($seleciona);
?>

<div class="container">
  <h3>Edição de Funcionário</h3>
  <p>Verifique os dados antes de editar o Funcionário.</p> 
 
  <br />
  <div id="form"> 
    <form action="../funcao/editeFuncionario.php" method="post">
        <input type="hidden" name="id" value="<?=$campo["id"]?>"> 
        <div class="form-group">
            <label for="nome">Nome do Funcionario:</label> 
            <input type="txt" class="form-control" id="nome" name="nome" value="<?=$campo["nome"]?>" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="<?=$campo["email"]?>" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" value="<?=$campo["cpf"]?>" required>
        </div> 
 
        <div class="form-group">
              <label for="setor">Setor Pertencente:</label>
              <select name="setor" class="form-control" id="setor" required>
               <option value="<?=$campo["setor"]?>"><?=$campo["nomeSetor"]?></option>
               <?php
                  /* LISTA DE SETORES CADASTRADOS ATIVOS */
                  $seleciona = mysqli_query($conexao, "SELECT * FROM setor where status = 1 ORDER BY id desc");
                  while($campo1=mysqli_fetch_array($seleciona)){
                ?>
                <option value="<?php echo $campo1['id'] ?>"><?php echo $campo1['nomeSetor'] ?></option>
              <?php } ?> 
            </select> 
        </div>
        <!-- O CARGO VEM VIA SCRIPT SE ACORDO COM O SETOR SELECIONADO (FIM DA PAGE) -->
        <div class="form-group">
              <label for="cargo">Cargo Pertencente:</label>
              <select id="cargo" name="cargo" class="form-control" required>
                <option value="<?=$campo["cargo"]?>"><?=$campo["nomeCargo"]?></option>
              </select>
        </div>

        <button type="submit" class="btn btn-primary">Concluir Edição</button>
        <a type="button" class="btn btn-info btn-md" href="listaFunc.php">Cancelar</button></a>

    </form>
  </div>
</div>

<!-- CARGO DO FUNCIONARIO DE ACORDO COM O SETOR SELECIONADO -->
<script type="text/javascript" src="../js/cargoDoSetor.js"></script>

<?php include("../template/fimPage.php"); ?>

