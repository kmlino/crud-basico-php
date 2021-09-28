<?php
require_once('db/Db.php');
$con = new Db();
$con->inserir($_POST['desc'],
            $_POST['val'],
            $_POST['disp']);
?>

<hr>

<div class="d-grid gap-2">
    <button class="btn"><a href="?i=cadastro" class="nav-link active">Novo cadastro</a></button><br>
    <button class="btn"><a href="?i=home" class="nav-link active">Menu principal</a></button><br>
    <button class="btn"><a href="?i=listar" class="nav-link active">Listar registros</a></button><br>
</div>
