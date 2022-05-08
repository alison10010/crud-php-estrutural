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
                /* BUSCA NA TABELA RELACIONADA (SETOR) PELO ID INFORMADO NO CAMPO "SETOR" DA TABELA CARGO  */
                $seleciona = mysqli_query($conexao, "SELECT * FROM funcionario AS f
                                                    INNER JOIN setor ON setor.id = f.setor
                                                    INNER JOIN cargo ON cargo.id = f.cargo ORDER BY f.id desc");
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