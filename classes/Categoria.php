<?php
require_once "Conexao.php";
class Categoria
{
    public $id;
    public $nome;       

    public function listar()
    {
        $query = "SELECT id, nome FROM categorias";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    
    public function carregar()
    {
        $query = "SELECT nome FROM categorias WHERE id = {$this->id} ";
        $conexao = Conexao::pegarConexao();
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        foreach ($lista as $linha) {
            return $linha;
        }        
    }


    public function inserir()
    {
        $query = "INSERT INTO categorias (nome) VALUES ('$this->nome')";
        $conexao = $conexao = Conexao::pegarConexao();
        $conexao->exec($query);
    }
    
}