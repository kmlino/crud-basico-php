<?php
require_once('db/Db.php');
$dbList = new Db();
$dbList = $dbList->listar();
?>
<div class="container">
    <h2 style="font-family:Arial, Helvetica, sans-serif; text-align: center;">Lista de produtos</h2>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="table-secondary">
                <th scope="col">Id</th>
                <th scope="col">Descrição</th>
                <th scope="col">Valor</th>
                <th scope="col">Disponível</th>
                <th scope="col">Excluir</th>
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
                <td><a href="?excluir=<?php echo $value['id_produto']?>;">Excluir</a></td>
            </tr>
        </tbody>
<?php
}
?>
    </table>
    <button class="btn btn-secondary">
        <a href="?i=home" class="text-decoration-none text-white">Voltar</a>
    </button>
</div>
