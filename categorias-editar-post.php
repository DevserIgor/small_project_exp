<?php require_once "global.php"?>
<?php
    $id = $_POST["id"];
    $categoria = new Categoria($id);    
    $categoria->nome = $_POST["nome"];
    $categoria->atualizar();



    header("Location: categorias.php");


?>