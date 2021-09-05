<?php
$pagina = 'home';

if(isset($_GET['i'])){
    $pagina = addslashes($_GET['i']);
};

if(isset($_GET['excluir'])){
    $id = (int)$_GET['excluir'];
    require_once('db/Db.php');
    $dbList = new Db();
    $dbList = $dbList->remover($id);
    header('Location: ?i=remover');
};
    
require_once('view/header.php');

switch ($pagina) {
    case 'home':
        include 'view/home.php';
        break;
    
    case 'cadastro':
        include 'view/cadastro.php';
        break;
    
    case 'listar':
        include 'control/listar.php';
        break;
 
    case 'adicionar':
        include 'control/adicionar.php';
        break;
        
    case 'remover':
        include 'control/remover.php';
        break;

    case 'atualizar':
        include 'control/atualizarOpcoes.php';
        break;
    
    case 'atualizarDb':
        include 'control/atualizarDb.php';
        break;
    
    case 'Db':
        include 'db/Db.php';
        break;
        
    case 'idAlterar':
        include 'control/atualizarOpcao.php';
        break;
        
    default:
        include 'view/home.php';
        break;
}

require_once('view/footer.php');

?>