<?php include("../template/inicioPage.php");  ?>

<div class="container">
  <h3>Lista de Setor</h3>
  <p>Mudanças podem ser realizadas pela lista.</p>
  <br />
  <div id="listaSetor">      
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Setor</th>
                <th scope="col">Descricao</th>
                <th scope="col" style="width: 6%">Situação</th>
            </tr>
        </thead>
        <tbody>
            <?php /* BUSCA NO BD E MOSTRA LISTA EM ORDER DE ID DESC*/
                $seleciona = mysqli_query($conexao, "SELECT * FROM setor where status = 1 ORDER BY id desc");
                while($campo=mysqli_fetch_array($seleciona)){
                ?>
                <tr>
                    <td></td>
                    <td><?=$campo["nomeSetor"]?></td>
                    <td><?=$campo["descricaoSetor"]?></td>
                    <td><center>ATIVO</center></td>
                    <td align="center">
                        <a class="btn btn-warning" href="editeSetor.php?editaid=<?=$campo["id"]?>">Editar</a>
                        <a class="btn btn-danger" href="excluirSetor.php?editaid=<?=$campo["id"]?>">Excluir</a>
                    </td>               
                </tr>
            <?php }?>
        </tbody>
    </table>
  </div>
</div>

<?php include("../template/fimPage.php"); ?>