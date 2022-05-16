<?php include("../template/inicioPage.php");  ?>

<!-- BUSCA OS DADOS NO BD DE ACORDO COM O ID DO CARGO PASSADO-->
<?php
  $rec = $_GET["editaid"];          /* BUSCA NA TABELA RELACIONADA PELO ID INFORMADO NO CAMPO "SETOR" E "CARGO" DE TABELAS ESTRAGEIRA */
  $seleciona = mysqli_query($conexao, "SELECT f.*, s.nomeSetor, c.nomeCargo FROM funcionario AS f /* PEGANDO APENAS 'nomeSetor' E 'nomeCargo' DE TABELA ESTRANGEIRA */
                                       INNER JOIN setor AS s ON s.id = f.setor
                                       INNER JOIN cargo AS c ON c.id = f.cargo where f.id=$rec");                                                   
  $campo = mysqli_fetch_array($seleciona);
?>

<div class="container">
  <h3 style="color: red">Exclução de Funcionário</h3>
  <p>Verifique os dados antes de excluir o Funcionário.</p> 
 
  <br />
  <div id="form"> 
    <form action="../funcao/excluiFuncionario.php" method="post">
        <input type="hidden" name="id" value="<?=$campo["id"]?>"> 
        <div class="form-group">
            <label for="nome">Nome do Funcionario:</label> 
            <label class="txtExcluir"><?=$campo["nome"]?></label>
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <label class="txtExcluir"><?=$campo["email"]?></label>
        </div>
        <div class="form-group">
            <label for="cpf">CPF:</label>
            <label class="txtExcluir"><?=$campo["cpf"]?></label>            
        </div> 
        <div class="form-group">
              <label for="setor">Setor Pertencente:</label>
              <label class="txtExcluir"><?=$campo["nomeSetor"]?></label> 
        </div>
        <div class="form-group">
              <label for="cargo">Cargo Pertencente:</label>
              <label class="txtExcluir"><?=$campo["nomeCargo"]?></label> 
        </div>

        <button type="submit" class="btn btn-danger">Excluir Funcionario</button>
        <a type="button" class="btn btn-info btn-md" href="listaFunc.php">Cancelar</button></a>

    </form>
  </div>
</div>

<?php include("../template/fimPage.php"); ?>

