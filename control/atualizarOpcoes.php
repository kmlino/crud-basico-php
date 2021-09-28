<?php
require_once('db/Db.php');
$dbList = new Db();
$dbList = $dbList->listar();
?>
<div class="container">
    <h2 style="text-align: center;">Lista de produtos</h2>
    <table class="table table-bordered">
        <thead>
            <tr class="table-secondary">
            <th scope="col">Id</th>
            <th scope="col">Descrição</th>
            <th scope="col">Valor</th>
            <th scope="col">Disponível</th>
            </tr>
        </thead>
<?php
foreach($dbList as $key => $value){
?>
        <tbody>
            <tr class="table-primary">
            <th scope="row"><?php echo $value['id_produto'];?></th>
            <td><?php echo $value['descricao'];?></td>
            <td><?php echo $value['valor'];?></td>
            <td><?php echo $value['disponivel'];?></td>
            </tr>
        </tbody>
<?php
}
?>
    </table>
<hr>
<form action="?i=idAlterar" method="post">
    <h6>Digite o código(<span style="color: green;"><strong>Id</strong></span>) do produto que deseja <strong> editar</strong>:</h6>
    <div class="row">
        <label for="id" class="form-label"></label>
        <div class="col">
            <input type="number" id="id" name="id" class="form-control" placeholder="Digite aqui o Id" required>
        </div>
        <div class="col">
            <input type="submit" value="Atualizar" class="btn btn-primary">
            <button class="btn btn-danger">
                <a href="?i=home" class="text-decoration-none text-white">Cancelar</a>
            </button>
        </div>
    </div>
</form>
</div>
<br>