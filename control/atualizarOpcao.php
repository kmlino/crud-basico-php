<?php
require_once('db/Db.php');
$dbList = new Db();
$dbList = $dbList->listar();
$id = $_POST['id'];
$igual = null;

foreach($dbList as $key => $value){
    if($id == $value['id_produto']){ 
        $igual = $id;
    }
}
?>

<div class="container">
    <h3>Valores atuais</h3>
    <table class="table table-bordered table-hover">
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
    if ($id == $value['id_produto']) {
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
        break;
    } if($id != $igual){
?>
        <tbody>
            <tr class="table-primary">
                <th scope="row"><?php echo 'Não encontrado';?></th>
                <td><?php echo '-';?></td>
                <td><?php echo '-';?></td>
                <td><?php echo '-';?></td>
            </tr>
        </tbody>
<?php
        break;
    }  
}
?>  

    </table>
    <hr>
</div>



<?php 
    

foreach($dbList as $key => $value){
    if($id == $value['id_produto']){
?>
<div class="container ">
    <h3>Novos valores</h3>
    <form action="?i=atualizarDb" method="post">
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <label for="desc" class="form-label">Id:</label>
                <small id="selecHelp" class="form-text text-muted"> *Não é possível alterar este campo!</small>
                <input type="text" class="form-control-plaintext bg-light" id="id" name="id" value="<?php echo($id)?>"readonly>
            </div>
            <div class="col-lg-6 col-sm-12">
                <label for="desc" class="form-label">Descrição:</label>
                <input type="text" class="form-control bg-light" id="desc" name="desc" value="<?php echo($value['descricao'])?>" required>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-sm-12">
                <label for="val" class="form-label">Valor:</label>
                <input type="text" class="form-control bg-light" id="val" name="val" value="<?php echo($value['valor'])?>" required> 
            </div>
            <div class="col-lg-6 col-sm-12 gy-2">
                <label for="disp">Disponível:</label>
                <small id="selecHelp" class="form-text text-mute"> *Se não preencher, o valor 'Não' será assumido como padrão!</small>
                <select class="form-select form-select-sm bg-light" aria-label=".form-select-sm example" id="disp" name="disp">
                    <option selected value="N">Selecionar</option>
                    <option value="S">Sim</option>
                    <option value="N">Não</option>
                </select>            
            </div> 
        </div>
        <div class="row">
            <div class="col-6">
            <button type="submit" class="btn btn-primary">Atualizar</button>
            </div>
            <div class="col-6">
                <button class="btn btn-danger">
                    <a href="?i=home" class="text-decoration-none text-white">Cancelar</a>
                </button>  
            </div>            
        </div>
    </form>
</div>
<?php 
        break;
    }if($id != $igual){
?>
        <p>Registro não encontrado! Tente novamente!<a href="?i=atualizar">  Voltar para a edição</a></p>
<?php
    break;
    }
}
?>

