<?php
require_once 'classes/Categoria.php';

$categoria = new Categoria();
$categoria->nome = $_POST['nome'];
$categoria->inserir();

header("location: categorias.php");
