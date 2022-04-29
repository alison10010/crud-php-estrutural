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
                <th scope="col">Cargo</th>
                <th scope="col">Descricao</th>
                <th scope="col" style="width: 6%">Situação</th>
            </tr>
        </thead>
        <tbody>
            <?php /* BUSCA NO BD E MOSTRA LISTA EM ORDER DE ID DESC*/
                include("../funcao/conexao.php");
                $seleciona = mysqli_query($conexao, "SELECT * FROM cargo where status = 1 ORDER BY id desc");
                while($campo=mysqli_fetch_array($seleciona)){
                ?>
                <tr>
                    <td></td>
                    <td><?=$campo["nomeCargo"]?></td>
                    <td><?=$campo["descricaoCargo"]?></td>
                    <td><center>ATIVO</center></td>
                    <td align="center">
                        <a class="btn btn-warning" href="editeCargo.php?editaid=<?=$campo["id"]?>">Editar</a>
                        <a class="btn btn-danger" href="excluirCargo.php?editaid=<?=$campo["id"]?>">Excluir</a>
                    </td>               
                </tr>
            <?php }?>
        </tbody>
    </table>
  </div>
</div>

<?php include("../template/fimPage.php"); ?>