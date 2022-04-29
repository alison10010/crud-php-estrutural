<?php include("../template-sub-pasta/inicioPage.php");  ?>

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
            <?php
                include("../funcao/conexao.php");
                $seleciona = mysqli_query($conexao, "SELECT * FROM setor where status = 1");
                while($campo=mysqli_fetch_array($seleciona)){
                ?>
                <tr>
                    <td></td>
                    <td><?=$campo["nomeSetor"]?></td>
                    <td><?=$campo["descricaoSetor"]?></td>
                    <td><center>ATIVO</center></td>
                    <td align="center">
                        <a class="btn btn-warning" href="editeSetor.php?editaid=<?=$campo["id"]?>">Editar</a>
                        <button type="button" class="btn btn-danger">Excluir</button>
                    </td>               
                </tr>
            <?php }?>
        </tbody>
    
    </table>

  </div>
</div>

<?php include("../template-sub-pasta/fimPage.php"); ?>



<!-- 
        <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            <td>
                <button type="button" class="btn btn-warning">Editar</button>
                <button type="button" class="btn btn-danger">Danger</button>
            </td>
        </tr>
    </tbody> 
-->