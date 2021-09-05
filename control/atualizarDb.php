<?php
require_once('db/Db.php');
$updt = new Db();
$updt->atualizar($_POST['id'],
        $_POST['desc'],
        $_POST['val'],
        $_POST['disp']);
?>

<hr>

<div class="d-grid gap-2">
    <button class="btn"><a href="?i=home" class="nav-link active">Menu principal</a></button><br>
    <button class="btn"><a href="?i=atualizar" class="nav-link active">Editar registro</a></button><br>
    <button class="btn"><a href="?i=listar" class="nav-link active">Listar registros</a></button><br>
</div>
