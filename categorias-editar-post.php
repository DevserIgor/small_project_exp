<?php require_once "global.php"?>
<?php
    try{
    $id = $_POST["id"];
    $categoria = new Categoria($id);    
    $categoria->nome = $_POST["nome"];
    $categoria->atualizar();
    header("Location: categorias.php");
    } catch (Exception $e) {
       Erro::trataErro($e);
    }

?>