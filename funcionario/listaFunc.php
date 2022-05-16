<?php include("../template/inicioPage.php");  ?>

<div class="container">
  <h3>Lista de Cargo</h3>
  <p>Mudanças podem ser realizadas pela lista.</p>
  <br />
  <div id="listaCargo">      
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Setor</th>
                <th scope="col">Cargo</th>
                <th scope="col" style="width: 6%">Situação</th>
            </tr>
        </thead>
        <tbody> 
            <?php
                /* BUSCA NA TABELA RELACIONADA PELO ID INFORMADO NO CAMPO "SETOR" E "CARGO" DA TABELA FUNCIONARIO  */
                $seleciona = mysqli_query($conexao, "SELECT f.*, s.nomeSetor, c.nomeCargo FROM funcionario AS f /* PEGANDO APENAS 'nomeSetor' E 'nomeCargo' DE TABELA ESTRANGEIRA */ 
                                                    INNER JOIN setor AS s ON s.id = f.setor
                                                    INNER JOIN cargo AS c ON c.id = f.cargo where f.status = 1 ORDER BY f.id desc");
                while($campo=mysqli_fetch_array($seleciona)){
                ?>
                <tr>
                    <td></td>
                    <td><?=$campo["nome"]?></td>
                    <td><?=$campo["nomeSetor"]?></td>
                    <td><?=$campo["nomeCargo"]?></td>
                    <td><center>ATIVO</center></td>
                    <td align="center">
                        <a class="btn btn-warning" href="editeFunc.php?editaid=<?=$campo["id"]?>">Editar</a>
                        <a class="btn btn-danger" href="excluirFunc.php?editaid=<?=$campo["id"]?>">Excluir</a>
                    </td>               
                </tr>
            <?php }?>
        </tbody>
    </table>
  </div>
</div>

<?php include("../template/fimPage.php"); ?>