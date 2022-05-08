<?php include("../template/inicioPage.php");  ?>

<div class="container">
  <h3>Cadastro de Funcionário</h3>
  <p>Verifique os dados antes de cadastrar o novo Funcionário.</p>

  <br />
  <div id="form">
    <form action="../funcao/addFuncionario.php" method="post">
        <div class="form-group">
            <label for="nome">Nome do Funcionario:</label>
            <input type="txt" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <input type="text" class="form-control" id="cpf" name="cpf" required>
        </div> 

        <div class="form-group">
              <label for="setor">Setor Pertencente:</label>
              <select name="setor" class="form-control" id="setor" required>
               <option value="">Selecione...</option>
               <?php
                  /* LISTA DE SETORES CADASTRADOS ATIVOS */
                  $seleciona = mysqli_query($conexao, "SELECT * FROM setor where status = 1 ORDER BY id desc");
                  while($campo=mysqli_fetch_array($seleciona)){
                ?>
                <option value="<?php echo $campo['id'] ?>"><?php echo $campo['nomeSetor'] ?></option>
              <?php } ?> 
            </select> 
        </div>
        <!-- O CARGO VEM VIA SCRIPT SE ACORDO COM O SETOR SELECIONADO (FIM DA PAGE) -->
        <div class="form-group">
              <label for="cargo">Cargo Pertencente:</label>
              <select id="cargo" name="cargo" class="form-control">
                  <option value="">Selecione...</option>
              </select>
        </div>

        <button type="submit" class="btn btn-default">Cadastrar</button>
    </form>
  </div>
</div>

<!-- CARGO DO FUNCIONARIO DE ACORDO COM O SETOR SELECIONADO -->
<script type="text/javascript" src="../js/cargoDoSetor.js"></script>

<?php include("../template/fimPage.php"); ?>

